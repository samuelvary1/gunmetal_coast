
<html>

  <head>
    <link rel="icon" type="image/png" href="/favicon.png">
    <script async src="//www.googletagservices.com/tag/js/gpt.js"></script>
    <script async src="//acdn.adnxs.com/prebid/not-for-prod/prebid.js"></script>
    <script>
      var div_1_sizes = [
        [300, 250],
        [300, 600]
      ];
      var div_2_sizes = [
        [728, 90],
        [970, 250]
      ];
      var PREBID_TIMEOUT = 1000;
      var FAILSAFE_TIMEOUT = 3000;

      var adUnits = [{
          code: '/22979003/sam_safeframe_test_1234',
          mediaTypes: {
            banner: {
              sizes: div_1_sizes
            }
          },
          bids: [{
            bidder: 'triplelift',
            params: {
              inventoryCode: 'sam_test',
              floor: 0.01
            }
          }]
        },
        {
          code: '/22979003/sam_safeframe_test_1234',
          mediaTypes: {
            banner: {
              sizes: div_2_sizes
            }
          },
          bids: [{
            bidder: 'triplelift',
            params: {
              inventoryCode: 'testing_unique_16',
              floor: 0.01
            }
          }]
        }
      ];

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
        googletag.defineSlot('/22979003/sam_safeframe_test_1234', div_1_sizes, 'div-1').addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
      });
      googletag.cmd.push(function() {
        googletag.defineSlot('/22979003/sam_safeframe_test_1234', div_2_sizes, 'div-2').addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
      });
    </script>

  </head>

  <body>
    <h2>Basic Prebid.js Example</h2>
    <h5>Div-1</h5>
    <div id='div-1'>
      <script type='text/javascript'>
        googletag.cmd.push(function() {
          googletag.display('div-1');
        });
      </script>
    </div>

    <br>

    <h5>Div-2</h5>
    <div id='div-2'>
      <script type='text/javascript'>
        googletag.cmd.push(function() {
          googletag.display('div-2');
        });
      </script>
    </div>

  </body>

</html>