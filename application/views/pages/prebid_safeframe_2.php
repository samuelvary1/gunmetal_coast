<html>
    <head>
      <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
    <script>
      window.googletag = window.googletag || {cmd: []};
      googletag.cmd.push(function() {
        googletag.defineSlot('/22979003/sam_safeframe_test_1234/sam_safeframe_test_ad_unit', [300, 250], 'div-gpt-ad-1587663935700-0').addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
      });
    </script>

        <link rel="icon" type="image/png" href="/favicon.png">
        <script async src="//www.googletagservices.com/tag/js/gpt.js"></script>
        <script async src="//acdn.adnxs.com/prebid/not-for-prod/prebid.js"></script>
        <script>

            var PREBID_TIMEOUT = 1000;
            var FAILSAFE_TIMEOUT = 3000;
            var PREBID_TIMEOUT = 50000;
            var adUnits = [{
                code: 'div-gpt-ad-1587663935700-0',
                sizes: [[300, 250]],
                bids: [
                {
                    bidder: 'triplelift',
                    params: {
                      inventoryCode: 'sam_test'
                    }
                }]
            }];

            // ======== DO NOT EDIT BELOW THIS LINE =========== //
            var googletag = googletag || {};
            googletag.cmd = googletag.cmd || [];
            googletag.cmd.push(function() {
                googletag.pubads().disableInitialLoad();
            });

            var pbjs = pbjs || {};
            pbjs.que = pbjs.que || [];

            pbjs.que.push(function() {
                pbjs.addAdUnits(adUnits);
                pbjs.requestBids({
                    bidsBackHandler: initAdserver,
                    timeout: PREBID_TIMEOUT
                });
            });

            function initAdserver() {
                if (pbjs.initAdserverSet) return;
                pbjs.initAdserverSet = true;
                googletag.cmd.push(function() {
                    pbjs.que.push(function() {
                        pbjs.setTargetingForGPTAsync();
                        googletag.pubads().refresh();
                    });
                });
            }
            // in case PBJS doesn't load
            setTimeout(function() {
                initAdserver();
            }, FAILSAFE_TIMEOUT);

            googletag.cmd.push(function() {
                googletag.defineSlot('/19968336/header-bid-tag-0', div_1_sizes, 'div-1').addService(googletag.pubads());
                googletag.pubads().enableSingleRequest();
                googletag.enableServices();
            });
            googletag.cmd.push(function() {
                googletag.defineSlot('/19968336/header-bid-tag-1', div_2_sizes, 'div-2').addService(googletag.pubads());
                googletag.pubads().enableSingleRequest();
                googletag.enableServices();
            });

        </script>

    </head>

    <body>
        <h2>Basic Prebid.js Example</h2>

        <!-- /22979003/sam_safeframe_test_1234/sam_safeframe_test_ad_unit -->
        <div id='div-gpt-ad-1587663935700-0' style='width: 300px; height: 250px;'>
            <script>
              googletag.cmd.push(function() { googletag.display('div-gpt-ad-1587663935700-0'); });
            </script>
          </div>

    </body>

</html>