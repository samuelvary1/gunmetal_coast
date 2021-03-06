<!-- prebid.php -->
<!DOCTYPE HTML>
<html>
<head>

    <h2>Testing 123</h2>
  <!-- Prebid Config Section START -->
  <!-- Make sure this is inserted before your GPT tag -->
  <script> 
    var PREBID_TIMEOUT = 50000;
    var adUnits = [{
        code: 'div-gpt-ad-1460505748561-0',
        sizes: [[300, 250]],
        bids: [
        {
            bidder: 'triplelift',
            params: {
               inventoryCode: 'weather_desktop_300x250'
            }
        }]
    },{
        code: 'div-gpt-ad-1460505661639-0',
        sizes: [[300, 600]],
        bids: [
        {
            bidder: 'triplelift',
            params: {
               inventoryCode: 'weather_desktop_300x250_TEST'
            }
        }]
    }];
    
    var pbjs = pbjs || {};
    pbjs.que = pbjs.que || [];
  </script>
  <!-- Prebid Config Section END -->
  
  <!-- Prebid Boilerplate Section START. No Need to Edit. -->
   <script type="text/javascript" src="//acdn.adnxs.com/prebid/not-for-prod/prebid.js" async></script>
  <script>
    var googletag = googletag || {};
    googletag.cmd = googletag.cmd || [];
    googletag.cmd.push(function() {
        googletag.pubads().disableInitialLoad();
    });
    pbjs.que.push(function() {
        pbjs.addAdUnits(adUnits);
        pbjs.requestBids({
            bidsBackHandler: sendAdserverRequest
        });
    });
    function sendAdserverRequest() {
        if (pbjs.adserverRequestSent) return;
        pbjs.adserverRequestSent = true;
        googletag.cmd.push(function() {
            pbjs.que.push(function() {
                pbjs.setTargetingForGPTAsync();
                googletag.pubads().refresh();
            });
        });
    }
    setTimeout(function() {
        sendAdserverRequest();
    }, PREBID_TIMEOUT);
  </script>  <!-- Prebid Boilerplate Section END -->

  <script>
    (function () {
        var gads = document.createElement('script');
        gads.async = true;
        gads.type = 'text/javascript';
        var useSSL = 'https:' == document.location.protocol;
        gads.src = (useSSL ? 'https:' : 'http:') +
                '//www.googletagservices.com/tag/js/gpt.js';
        var node = document.getElementsByTagName('script')[0];
        node.parentNode.insertBefore(gads, node);
    })();
  </script>

  <script>
    googletag.cmd.push(function () {
        googletag.defineSlot('/19968336/header-bid-tag-0', [[300, 250]], 'div-gpt-ad-1460505748561-0').addService(googletag.pubads());
        googletag.defineSlot('/19968336/header-bid-tag1', [[300, 250]], 'div-gpt-ad-1460505661639-0').addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
    });
  </script>
</head>

<body>
<h2>Prebid.js Test</h2>
<h5>300x250 Div 1</h5>
<div id='div-gpt-ad-1460505748561-0'>
    <script type='text/javascript'>
        googletag.cmd.push(function() { googletag.display('div-gpt-ad-1460505748561-0'); });
    </script>
</div>

<h5>300x250 Div 2</h5>
<div id='div-gpt-ad-1460505661639-0'>
    <script type='text/javascript'>
        googletag.cmd.push(function() { googletag.display('div-gpt-ad-1460505661639-0'); });
    </script>
</div>

</body>
</html>