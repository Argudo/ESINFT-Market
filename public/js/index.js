var web3 = new Web3(new Web3.providers.HttpProvider('http://localhost:7545'));
var web3 = new Web3(Web3.givenProvider || 'ws://localhost:7545');
async function web3setup() {
    if(window.ethereum != undefined){
        //window.web3 = new Web3(window.ethereum);
          // ask user permission to access his accounts
          account = await window.ethereum.request({ method: "eth_requestAccounts" });
          document.getElementById("account").setAttribute('style', 'z-index: 2; margin: auto; background-color: white; padding: 15px; border-radius: 5px; font-weight: bold;display:inline-block;');
          document.getElementById("account").innerHTML = account[0];
          document.getElementById("text").innerHTML = 'Cuenta conectada';
          document.getElementById("login-btn").disabled = true;
    }
    else{
        alert('Please install MetaMask');
    }
};
