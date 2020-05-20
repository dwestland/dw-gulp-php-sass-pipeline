<?php
  $INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/includes/";
  $title = "BEACH CAM - Live streaming webcam from Venice Beach, California"; 
  $description = "Amazing Beach Cam - Live streaming HD webcam from Venice Beach, California. See the people, skaters, beach and surf";
  $appendHead = "
  <style>
    body {
      background-image: url(/beachcam/images/beachcam-bg.gif)
    }
    .google-leaderboard-responsive-ad {
      margin: auto; padding: 0 3em;
      border: 1px solid green;
    }
    .visit-venice img {
      height: 80px;
      width: 50px;
    }
    .visit-venice p {
      display: inline-block;
      text-align: center;
    }
    @media (min-width: 601px) and (max-width: 1199px) {
      body {
        background-image: none;
      }
    }
    @media (max-width: 600px) {
      body {
        background-image: none;
      }
    }
  </style>
  "
?>

<!DOCTYPE html>
<html lang="en">
<?php include($INC_DIR. "head.php"); ?>
<body>

<article class="page-wrapper">

  <?php include($INC_DIR. "header.php"); ?>

  <main>
    <article class="content-wrapper">
      <section>
        <h1>Venice Beach Cam</h1>
        <p class="bigger-text">Live Web Cam from Venice Beach, California - <a href="test/" target="_blank">Time Lapse</a></p>

        <div class="cam-container">
          <a href="https://thesidewalkcafe.com/" target="_blank"><img src="/beachcam/images/sidewalk-cafe-banner.jpg"></a>
          <!-- WARNING -->
          <!-- INTERNATIONAL COPYRIGHT ENFORCED - SUBJECT TO CIVIL AND CRIMINAL PENALTIES -->
          <!-- Cam Script Start -->
          <script id="bri_cam_1" class="bri_embed" src="https://live2.brownrice.com?sn=westland&em=1&autostart=true"></script>
          <!-- Cam Script End -->
        </div>

      </section>
      <aside>
        <div id="weather-widget"></div>
        Ad goes here

        <a href="https://live1.brownrice.com/embed/westland"></a>

        <!-- Beach Cam Responsive Add -->
        <div class="google-leaderboard-responsive-ad">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-6144099935579862"
            data-ad-slot="3197607367"
            data-ad-format="auto"></ins>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>

      </aside>
    </article>

    <div>
      Ad goes here

      <!-- Beach Cam Responsive Add -->
      <div class="google-leaderboard-responsive-ad">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <ins class="adsbygoogle"
          style="display:block"
          data-ad-client="ca-pub-6144099935579862"
          data-ad-slot="3197607367"
          data-ad-format="auto"></ins>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
    </div>

    <article class="content-wrapper">
      <section>

        <p>This is a live, streaming HD webcam from Venice Beach, California, just south of Santa Monica.  Venice Beach is an eclectic, funky, and definitely unique place where sidewalk vendors line the boardwalk selling their wares, many of the items homemade; and street performers entertain the passing crowds by performing their unusual talents. One of the most interesting times to view Beach Cam is during the weekend, when up to 150,000 people visit a day.</p>

        <!-- Disqus Comments -->
        <div id="disqus_thread"></div>
          <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'venicebeachcam'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
              var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
              dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
          </script>
          <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
          <a href="https://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
        </div>
        <!-- End Disqus Comments -->


        <h1>H1 Title</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, expedita. Deserunt culpa maxime laudantium sapiente. Quos quis placeat maxime dicta distinctio fugit, non perspiciatis voluptatem?</p>

        <h1>H1 Title</h1>
        <h2>H2 Title</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, expedita. Deserunt culpa maxime laudantium sapiente. Quos quis placeat maxime dicta distinctio fugit, non perspiciatis voluptatem?</p>

        <h2>H2 Title</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, expedita. Deserunt culpa maxime laudantium sapiente. Quos quis placeat maxime dicta distinctio fugit, non perspiciatis voluptatem?</p>

        <h3>H3 Title</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, expedita. Deserunt culpa maxime laudantium sapiente. Quos quis placeat maxime dicta distinctio fugit, non perspiciatis voluptatem?</p>

        <h4>H4 Title</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, expedita. Deserunt culpa maxime laudantium sapiente. Quos quis placeat maxime dicta distinctio fugit, non perspiciatis voluptatem?</p>

        <h5>H5 Title</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, expedita. Deserunt culpa maxime laudantium sapiente. Quos quis placeat maxime dicta distinctio fugit, non perspiciatis voluptatem?</p>

        <h6>H6 Title</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, expedita. Deserunt culpa maxime laudantium sapiente. Quos quis placeat maxime dicta distinctio fugit, non perspiciatis voluptatem?</p>

      </section>
      <aside>

        Ad goes header

        <!-- Beach Cam Responsive Add -->
        <div class="google-leaderboard-responsive-ad">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-6144099935579862"
            data-ad-slot="3197607367"
            data-ad-format="auto"></ins>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>

        <h3>Video:<br>Venice Beach Boardwalk Loop</h3>
        <div class="video-link">
          <a href="/beachcam/videos/venice-beach-boardwalk-loop/"><img id="image" src="/beachcam/images/venice-beach-boardwalk-loop.jpg" alt="Venice Beach Cam" class="video-link"></a>
          <div class="play"></div>
        </div>
        <p>Video: <a href="/beachcam/videos/venice-beach-boardwalk-loop/">Venice Beach Boardwalk Loop</a></p>
        
        <div class="visit-venice">
          <img src="/beachcam/images/harryicon.gif" alt="Visit Venice Beach">
          <p>
            <a href="/venice/" target="beachcam">Visit Venice</a><br>The Ultimate Venice Beach Web Site
          </p>
        </div>

      </aside>
    </article>

  </main>

  <?php include($INC_DIR. "footer.php"); ?>


<script>
  // Weather Widget
  const url = `https://api.westland.net/weather-widget/90291`

  const convertTime = (unixTime, timeZone) => {
    unixTime += timeZone
    let newTime = new Date(unixTime * 1000).toISOString().slice(0, 16).replace('T', ' ')
    return newTime
  }

  const convertTemp = (temp) => {
    // Kelvin to Fahrenheit
    let newTemp = Math.round(temp * 9/5 - 459.67)
    return newTemp
  }

  const getWeather = async() => {
    console.time('Received Weather Data')
    const response = await fetch(url)
    .catch((error)=>console.log('Fetch Error: ', error))
    const data = await response.json()
    return data
  }

  const result = getWeather();

  result.then((data) => {
    let weatherIcon = data.weather[0].icon
    let weatherWidget = `
      <div class="weather-widget-container">
      <div class="weather-widget-title">${data.name} Weather</div>
      <div class="weather-widget-icon">
        <img src="/images/weather-icons/${weatherIcon}.svg" alt="${data.weather[0].main}">
      </div>
      <div class="weather-widget-temperature">${convertTemp(data.main.temp)}&deg;F</div>
      <div class="weather-widget-condition">${data.weather[0].main}</div>
      <div class="weather-widget-updated">Updated: ${convertTime(data.dt, data.timezone)}</div>
      </div>
    `
    document.getElementById("weather-widget").innerHTML = weatherWidget
    console.timeEnd('Received Weather Data')
  })
</script>


<!-- AddThis -->
<!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53a51f0a658a066f"></script> -->

<!-- Disqus -->
<script type="text/javascript">
  /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
  var disqus_shortname = 'venicebeachcam'; // required: replace example with your forum shortname

  /* * * DON'T EDIT BELOW THIS LINE * * */
  (function () {
    var s = document.createElement('script'); s.async = true;
    s.type = 'text/javascript';
    s.src = '//' + disqus_shortname + '.disqus.com/count.js';
    (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
  }());
</script>
<!-- End Disqus -->

</article>
<script src="/js/main.js"></script>
</body>
</html>
