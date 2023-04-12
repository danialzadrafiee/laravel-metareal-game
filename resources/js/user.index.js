const connectWalletButton = $('[action="btn_wc_login"]')
let provider;

async function connectWallet() {
    provider = new WalletConnectProvider.default({
        rpc: {
            1: 'https://mainnet.infura.io/v3/ac7a761469dc4094b909e049bc289f4e',
        },
    });

    await provider.enable();
    const accounts = await provider.send('eth_accounts');
    const wallet = accounts[0];
    console.log(wallet)
    checkWalletConnect();
}

async function checkWalletConnect() {
    provider = new WalletConnectProvider.default({
        qrcode: false,
        rpc: {
            1: 'https://mainnet.infura.io/v3/ac7a761469dc4094b909e049bc289f4e',
        },
    });

    await provider.enable();

    // Check if WalletConnect has an existing session
    if (provider.wc.session) {
        const accounts = await provider.send('eth_accounts');
        const wallet = accounts[0];
        console.log(wallet)
        // Perform login or registration using the wallet address
        window.location.href =route('user.register',{wallet:wallet});
    }
}


// Check WalletConnect status when the page loads
checkWalletConnect();

connectWalletButton.on('click', connectWallet);



console.log(route('user.index'));