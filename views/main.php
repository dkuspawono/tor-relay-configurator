  <!-- Primary Page Layout -->
  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <h2>0) Hosting</h2>
        <p>
          You can run your Tor relay on every supported linux machine that you have SSH access to, be it in your home, a virtual server, or a dedicated server.
          <br> But not every hoster or ISP allows Tor relays in their network.
          <br> You can find a comprehensive list of Tor-friendly companys on the <a href="https://trac.torproject.org/projects/tor/wiki/doc/GoodBadISPs" target="_blank">official Tor wiki</a>.
        </p>
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <h2>1) Configuration</h2>
        <form action="/" method="post" id="mainform">
          <label>Operating System*<sup>1</sup> (Currently Ubuntu and Debian only. More options in the future)</label>
          <select name="os" id="os-select">
            <option value="precise">Ubuntu Precise Pangolin (12.04)</option>
            <option value="trusty" selected>Ubuntu Trusty Tahr (14.04)</option>
            <option value="vivid">Ubuntu Vivid Vervet (15.04)</option>
            <option value="wily">Ubuntu Wily Werewolf (15.10)</option>
            <option value="squeeze">Debian Squeeze (6.0)</option>
            <option value="wheezy">Debian Wheezy (7)</option>
            <option value="jessie">Debian Jessie (8)</option>
            <option value="sid">Debian unstable (sid)</option>
          </select>

          <label>Tor node type*</label>
          <label class="u-full-width">
            <input type="radio" name="node-type" value="relay" checked>
            <span class="label-body">Relay
              <span style="font-style:italic;font-size:12px;">(Default; <b>You probably want to keep this selected</b>)</span>
            </span>
          </label>
          <label class="u-full-width">
            <input type="radio" name="node-type" value="bridge" disabled>
            <span class="label-body">Bridge
              <span style="font-style:italic;font-size:12px;">(Currently disabled)</span>
            </span>
          </label>
          <label class="u-full-width">
            <input type="radio" name="node-type" value="exit">
            <span class="label-body">Exit Node
              <span style="font-style:italic;font-size:12px;">(Following <a href="https://trac.torproject.org/projects/tor/wiki/doc/ReducedExitPolicy">ReducedExitPolicy</a>)</span>
            </span>
          </label>
          <p id="exit-info" style="background: rgba(255,0,0,0.1)">
            Running an Exit Node is the best way to help the Tor network but you have to be aware of the risks.
            <br> More Info:
            <a class="italic" href="https://trac.torproject.org/projects/tor/wiki/doc/TorExitGuidelines" target="_blank">Tor Exit Guidelines</a>
          </p>

          <div class="hideBridge">
            <label>Relay Name*
              <span style="font-style:italic;font-size:12px;">(1 to 19 characters, only letters and numbers, no spaces or other special characters)</span>
            </label>
            <input type="text" name="relayname" class="u-full-width" placeholder="The nickname of your relay" required="true">

            <label>Contact Info*</label>
            <input type="text" name="contactinfo" class="u-full-width" placeholder="Your email address (slight obfuscation reduces spam)" required="true">

            <div class="row">
              <div class="six columns">
                <label for="orport">ORPort*</label>
                <input type="text" name="orport" class="u-full-width" value="9001" id="orport" required="true">
              </div>

              <div class="six columns">
                <label for="dirport">DirPort</label>
                <input type="text" name="dirport" class="u-full-width" value="9030" id="dirport">
              </div>
            </div>

            <label for="traffic-total">Total (Up + Down) monthly traffic limit (empty for no limit)</label>
            <div class="row">
              <div class="ten columns">
                <input type="text" name="traffic-limit" id="traffic-total" class="only-numbers u-full-width" placeholder="e.g. 10TB (= 5TB Upstream traffic + 5TB Downstream traffic)">
              </div>
              <div class="two columns">
                <select class="u-full-width" name="traffic-unit">
                  <option value="GB">GB</option>
                  <option value="TB">TB</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="six columns">
                <label for="bandwidth-rate">Maximum bandwidth (empty for no limit)</label>
                <input type="text" name="bandwidth-rate" id="bandwidth-rate" class="only-numbers u-full-width" placeholder="Value in Mb/s (Megabits/second)">
              </div>
              <div class="six columns">
                <label for="bandwidth-burst">Maximum burst bandwidth</label>
                <input type="text" name="bandwidth-burst" id="bandwidth-burst" class="only-numbers u-full-width" placeholder="Value in Mb/s (Megabits/second)">
              </div>
            </div>

            <label class="u-full-width">
              <input type="checkbox" name="enable-arm">
              <span class="label-body">Enable monitoring through <a href="https://www.atagar.com/arm/" target="_blank">arm</a></span>
            </label>
          </div>

          <input id="submit" type="submit" class="button-primary u-pull-right" name="submit" value="submit">
        </form>
        <?php if($errors): ?>
          <p style="color: red; font-weight: bold; font-size: 1.75rem;">
            Error: <?php echo $errors; ?>
          </p>
        <?php endif; ?>

        <br>
        <br>
        <p>
          <i>
            By clicking submit you agree that I take no responsibility for any damages that might occur when running the Tor-Relay.co setup script.
          </i>
        </p>
          <p>* required values</p>
          <p><sup>1</sup> To find your OS version run
            <pre><code>lsb_release -a</code></pre>
            if this does not work try
            <pre><code>cat /etc/issue</code></pre>
          </p>
      </div>
    </div>

  </div>