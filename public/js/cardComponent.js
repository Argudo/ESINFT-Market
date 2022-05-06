import { LitElement, css, html } from 'https://cdn.jsdelivr.net/gh/lit/dist@2/core/lit-core.min.js';

export class cardNFT extends LitElement{
    static properties = {
        name: {type: String},
        autor: {type: String},
        price: {type: String},
        img: {},
        enlace: {type: String}
    }

    static styles = css`
        .carta{
            position:relative;
            width: 250px;
            height: fit-content;
            color: black;
            background-color: white;
            border-radius: 5px;
            border: 0px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            text-align: right;
            padding-bottom: 1px;
        }

        .price {
            width: 250px;
            font-size: 1rem;
            position: absolute;
            bottom: -18;
            text-align: center;
        }

        .price p{
            margin: auto;
            padding: 5px 0px;
            margin-top: -20px;
            width: 50%;
            background-color: white;
            border: 2px solid #ccc;
            border-radius: 50px;
        }
        
        img:hover .card-desc{
            opacity: 0;
            z-index: -1;
        }

        img{
            z-index: 1;
            width: calc(100% - 20px);
            height: 200px;
            padding: 10px;
            padding-bottom: 0px;
            border-radius: 5px;
            -webkit-transition:all 1s ease;
            -moz-transition:all 1s ease;
            -o-transition:all 1s ease;
            -ms-transition:all 1s ease;
        }

        h5{
            text-transform: uppercase;
        }

        h5, h6{
            margin-right: 20px;
        }

        a{
            color: #18272F;
            position: relative;
            text-decoration: none;
        }

        a::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            border-radius: 2px;
            background-color: #18272F;
            bottom: 0;
            left: 0;
            transform-origin: right;
            transform: scaleX(0);
            transition: transform .3s ease-in-out;
        }
          
        a:hover::before {
        transform-origin: left;
        transform: scaleX(1);
        }

        .comprar {
            opacity: 0; /* Hide button */
            position: absolute;
            width: 250px;
            top: 30%;
            text-align: center;
        }

        .comprar > button{
            padding: 1.3em 3em;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-weight: 500;
            color: #000;
            background-color: #fff;
            border: none;
            border-radius: 45px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease 0s;
            cursor: pointer;
            outline: none;
        }

        .comprar > button:hover {
            background-color: #2EE59D;
            box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
            color: #fff;
        }
         
        .carta:hover .comprar{
            opacity: 1; /* On :hover of div show button */
            -webkit-transition:all 0.4s ease;
            -moz-transition:all 0.4s ease;
            -o-transition:all 0.4s ease;
            -ms-transition:all 0.4s ease;
        }

        .carta:hover .imagen{
            opacity: 0.4; /* On :hover of div show button */
            -webkit-transition:all 0.4s ease;
            -moz-transition:all 0.4s ease;
            -o-transition:all 0.4s ease;
            -ms-transition:all 0.4s ease;
        }

    `;

    constructor(){
        super();
        this.name = "Nombre predeterminado";
        this.autor = "Autor Anonimo";
        this.price = "0.00";
        this.img = "";
        this.enlace = "vender"
    }

    render(){
        return html`
            <div style=" height: fit-content; width:fit-content; margin:10px; margin-bottom: 20px;">
                <div class="carta">
                    <img class="imagen" src=${this.img}></img>
                    <h5>${this.name}</h5>
                    <h6><a href="#">${this.autor}</a></h6>
                    <div class="price">
                        <p><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="vertical-align: -0.125em;" width="0.63em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 320 512"><path fill="currentColor" d="M311.9 260.8L160 353.6L8 260.8L160 0l151.9 260.8zM160 383.4L8 290.6L160 512l152-221.4l-152 92.8z"/></svg> ${this.price}</p>
                    </div>
                    <div class="comprar">
                        <button type="button" onclick="location.href='${this.enlace}'">COMPRAR</button>
                    </div>
                    </div>
            </div>
        `;
    }
}

customElements.define('nft-card', cardNFT);


export class cardNFTmini extends LitElement{
    static properties = {
        name: {type: String},
        autor: {type: String},
        price: {type: String},
        img: {},
        enlace: {type: String}
    }

    static styles = css`
        .carta{
            position:relative;
            width: 200px;
            height: fit-content;
            color: black;
            background-color: white;
            border-radius: 5px;
            border: 0px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            text-align: right;
            padding-bottom: 1px;
        }

        .price {
            width: 200px;
            font-size: 1rem;
            position: absolute;
            bottom: -18;
            text-align: center;
        }

        .price p{
            margin: auto;
            padding: 5px 0px;
            margin-top: -20px;
            width: 50%;
            background-color: white;
            border: 2px solid #ccc;
            border-radius: 50px;
        }
        
        img:hover .card-desc{
            opacity: 0;
            z-index: -1;
        }

        img{
            z-index: 1;
            width: calc(100% - 20px);
            height: 150px;
            padding: 10px;
            padding-bottom: 0px;
            border-radius: 5px;
            -webkit-transition:all 1s ease;
            -moz-transition:all 1s ease;
            -o-transition:all 1s ease;
            -ms-transition:all 1s ease;
        }

        h5{
            text-transform: uppercase;
        }

        h5, h6{
            margin-right: 20px;
        }

        a{
            color: #18272F;
            position: relative;
            text-decoration: none;
        }

        a::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            border-radius: 2px;
            background-color: #18272F;
            bottom: 0;
            left: 0;
            transform-origin: right;
            transform: scaleX(0);
            transition: transform .3s ease-in-out;
        }
          
        a:hover::before {
        transform-origin: left;
        transform: scaleX(1);
        }

        .comprar {
            opacity: 0; /* Hide button */
            position: absolute;
            width: 200px;
            top: 30%;
            text-align: center;
        }

        .comprar > button{
            padding: 1.3em 3em;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 400;
            color: #000;
            background-color: #fff;
            border: none;
            border-radius: 45px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease 0s;
            cursor: pointer;
            outline: none;
        }

        .comprar > button:hover {
            background-color: #2EE59D;
            box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
            color: #fff;
        }
         
        .carta:hover .comprar{
            opacity: 1; /* On :hover of div show button */
            -webkit-transition:all 0.4s ease;
            -moz-transition:all 0.4s ease;
            -o-transition:all 0.4s ease;
            -ms-transition:all 0.4s ease;
        }

        .carta:hover .imagen{
            opacity: 0.4; /* On :hover of div show button */
            -webkit-transition:all 0.4s ease;
            -moz-transition:all 0.4s ease;
            -o-transition:all 0.4s ease;
            -ms-transition:all 0.4s ease;
        }

    `;

    constructor(){
        super();
        this.name = "Nombre predeterminado";
        this.autor = "Autor Anonimo";
        this.price = "0.00";
        this.img = "";
        this.enlace = ""
    }

    render(){
        return html`
            <div style=" height: fit-content; width:fit-content; margin:10px; margin-bottom: 20px;">
                <div class="carta">
                    <img class="imagen" src=${this.img}></img>
                    <h5>${this.name}</h5>
                    <h6><a href="#">${this.autor}</a></h6>
                    <div class="price">
                        <p><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="vertical-align: -0.125em;" width="0.63em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 320 512"><path fill="currentColor" d="M311.9 260.8L160 353.6L8 260.8L160 0l151.9 260.8zM160 383.4L8 290.6L160 512l152-221.4l-152 92.8z"/></svg> ${this.price}</p>
                    </div>
                    <div class="comprar">
                    <button type="button" onclick="location.href='${this.enlace}'">COMPRAR</button>
                    </div>
                    </div>
            </div>
        `;
    }
}

customElements.define('nft-card-mini', cardNFTmini);



export class cardNFTventa extends LitElement{
    static properties = {
        name: {type: String},
        autor: {type: String},
        price: {type: String},
        img: {},
        enlace: {type: String}
    }

    static styles = css`
        .carta{
            position:relative;
            width: 200px;
            height: fit-content;
            color: black;
            background-color: white;
            border-radius: 5px;
            border: 0px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            text-align: right;
            padding-bottom: 1px;
        }

        .price {
            width: 200px;
            font-size: 1rem;
            position: absolute;
            bottom: -18;
            text-align: center;
        }

        .price p{
            margin: auto;
            padding: 5px 0px;
            margin-top: -20px;
            width: 50%;
            background-color: white;
            border: 2px solid #ccc;
            border-radius: 50px;
        }
        
        img:hover .card-desc{
            opacity: 0;
            z-index: -1;
        }

        img{
            z-index: 1;
            width: calc(100% - 20px);
            height: 150px;
            padding: 10px;
            padding-bottom: 0px;
            border-radius: 5px;
            -webkit-transition:all 1s ease;
            -moz-transition:all 1s ease;
            -o-transition:all 1s ease;
            -ms-transition:all 1s ease;
        }

        h5{
            text-transform: uppercase;
        }

        h5, h6{
            margin-right: 20px;
        }

        a{
            color: #18272F;
            position: relative;
            text-decoration: none;
        }

        a::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            border-radius: 2px;
            background-color: #18272F;
            bottom: 0;
            left: 0;
            transform-origin: right;
            transform: scaleX(0);
            transition: transform .3s ease-in-out;
        }
          
        a:hover::before {
        transform-origin: left;
        transform: scaleX(1);
        }

        .comprar {
            opacity: 0; /* Hide button */
            position: absolute;
            width: 200px;
            top: 30%;
            text-align: center;
        }

        .comprar > button{
            padding: 1.3em 3em;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 400;
            color: #000;
            background-color: #fff;
            border: none;
            border-radius: 45px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease 0s;
            cursor: pointer;
            outline: none;
        }

        .comprar > button:hover {
            background-color: red;
            box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
            color: #fff;
        }
         
        .carta:hover .comprar{
            opacity: 1; /* On :hover of div show button */
            -webkit-transition:all 0.4s ease;
            -moz-transition:all 0.4s ease;
            -o-transition:all 0.4s ease;
            -ms-transition:all 0.4s ease;
        }

        .carta:hover .imagen{
            opacity: 0.4; /* On :hover of div show button */
            -webkit-transition:all 0.4s ease;
            -moz-transition:all 0.4s ease;
            -o-transition:all 0.4s ease;
            -ms-transition:all 0.4s ease;
        }

    `;

    constructor(){
        super();
        this.name = "Nombre predeterminado";
        this.autor = "Autor Anonimo";
        this.price = "0.00";
        this.img = "";
        this.enlace = ""
    }

    render(){
        return html`
            <div style=" height: fit-content; width:fit-content; margin:10px; margin-bottom: 20px;">
                <div class="carta">
                    <img class="imagen" src=${this.img}></img>
                    <h5>${this.name}</h5>
                    <h6><a href="#">${this.autor}</a></h6>
                    <div class="price">
                        <p><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="vertical-align: -0.125em;" width="0.63em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 320 512"><path fill="currentColor" d="M311.9 260.8L160 353.6L8 260.8L160 0l151.9 260.8zM160 383.4L8 290.6L160 512l152-221.4l-152 92.8z"/></svg> ${this.price}</p>
                    </div>
                    <div class="comprar">
                    <button type="button" onclick="location.href='${this.enlace}'">VENDER</button>
                    </div>
                    </div>
            </div>
        `;
    }
}

customElements.define('nft-card-venta', cardNFTventa);