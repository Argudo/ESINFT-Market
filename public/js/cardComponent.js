import { LitElement, css, html } from 'https://cdn.jsdelivr.net/gh/lit/dist@2/core/lit-core.min.js';

export class cardNFT extends LitElement{
    static properties = {
        name: {type: String},
        autor: {type: String},
        price: {type: String},
        img: {}
    }

    static styles = css`
        :host{
            width: 300px;
            height: fit-content;
            color: black;
            background-color: white;
            border-radius: 5px;
            border: 0px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            text-align: right;
        }

        .price {
            width: 100%;
            font-size: 1rem;
            position: absolute;
            bottom: -1;
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
            height: 250px;
            padding: 10px;
            padding-bottom: 0px;
            border-radius: 5px;
            -webkit-transition:all 1s ease;
            -moz-transition:all 1s ease;
            -o-transition:all 1s ease;
            -ms-transition:all 1s ease;
        }

        h4{
            text-transform: uppercase;
        }

        h4, h5{
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
            width: 100%;
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
         
        .card:hover .comprar{
            opacity: 1; /* On :hover of div show button */
            -webkit-transition:all 0.4s ease;
            -moz-transition:all 0.4s ease;
            -o-transition:all 0.4s ease;
            -ms-transition:all 0.4s ease;
        }

        .card:hover .imagen{
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
        this.img = ""
    }

    render(){
        return html`
            <div class="card">
                <img class="imagen" src=${this.img}></img>
                <h4>${this.name}</h4>
                <h5><a href="#">${this.autor}</a></h5>
                <div class="price">
                    <p><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="vertical-align: -0.125em;" width="0.63em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 320 512"><path fill="currentColor" d="M311.9 260.8L160 353.6L8 260.8L160 0l151.9 260.8zM160 383.4L8 290.6L160 512l152-221.4l-152 92.8z"/></svg> ${this.price}</p>
                </div>
                <div class="comprar">
                    <button>COMPRAR</button>
                </div>
            </div>
        `;
    }
}

customElements.define('nft-card', cardNFT);