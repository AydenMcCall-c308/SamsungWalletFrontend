<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Samsung Coupon 🎁</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="./res/style/samsung-wallet-demo.css">
</head>

<body>
    <div class="samsung-coupon-container">
        
        <script src="https://us-cdn-gpp.mcsvc.samsung.com/lib/wallet-card.js" type="text/javascript"></script>
        
        <script src="https://us-cdn-gpp.mcsvc.samsung.com/lib/wallet-card.js" type="text/javascript"></script>
        <div id="TARGET_ID"></div>
        <div style='width: vw; overflow-wrap: break-word'><p><strong>Testing Wallet</strong> <br /><br /></p>
        <script>
            function get_cdata() {

                return new Promise(resolve => {
                    const options = {method: 'GET', "Content-Type": "text/plain" };

                fetch('http://192.168.0.3:8080/cdata', options)
                .then(response => response.text())
                .then(response => {resolve(response);})
                .catch(err => {console.error(err); alert(err);})
                });
            }
            /*function resolveAfter2Seconds() {
                return new Promise(resolve => {
                    setTimeout(() => {
                    resolve('resolved');
                    }, 2000);
                });
            }*/
        samsungWallet.addButton({
            partnerCode: "4051928138748138496", 
            cardId: "3geqngloshd00", 
            cdata: "something", 
            RDClickUrl: "https://us-rd.mcsvc.samsung.com/statistics/click/addtowlt?ep=C50C3754FEB24833B30C10B275BB6AB8;cc=GC;ii=1287098641030840334;co=4051928138748138496;cp=1288017491089625089;si=24;pg=101212967375212546;pi=Aqz68EBXSx6Mv9jsaZxzaA;tp=4051932794253138496;li=0", 
            RDImpressionUrl: "https://us-rd.mcsvc.samsung.com/statistics/impression/addtowlt?ep=C50C3754FEB24833B30C10B275BB6AB8;cc=GC;ii=1287098641030840334;co=4051928138748138496;cp=1288017491089625089;si=24;pg=101212967375212546;pi=Aqz68EBXSx6Mv9jsaZxzaA;tp=4051932794253138496;li=0", 
            targetId: "TARGET_ID", 
            buttonId: "BUTTON_ID",
            target: "WALLET",
            showForced: "true",
            onClickButton: async (options) => {
                return new Promise(async (resolve, reject) => {
                    data = await get_cdata();
                    options.cdata = data;
                    console.log(options.cdata);
                    resolve(true);
                })
            }

    })
    </script>
    </div>
</body>

</html>
