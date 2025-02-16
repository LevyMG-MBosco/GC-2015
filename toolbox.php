<?php include_once('includes/header.php'); ?>
<div class="interior-page-wrap container">
  <!--  -->
  <div class="row">
    <div class="col-xs-12 col-md-9">
      <div class="interior-content">
        <div class="section" id="section-0">
          <div class="row">
            <div class="col-xs-12">
              <img src='assets/imgs/Toolbox-HERO.jpg' />
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-9">
              <h1>ToolBox</h1>
              <p>At General Carbide, we want to be your “go to” source for technical guidance. That’s why we’ve created Toolbox — our suite of tools that allows you to easily select the best grade for your application.</p>

            </div>
            <div class="col-xs-12 col-sm-3">

            </div>
          </div>
        </div>

        <div class="section" id="section-4">
          <div class="row">
            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-12">
                  <h3>Our General Carbide App</h3>
                </div>
                <div class="col-xs-12 col-sm-9">
                  <p>Download our Toolbox Mobile App and discover the industry’s only Grade Selector — a proprietary tool that easily allows you to choose the best grade for your application. It also includes conversion calculators and <i>The Designer’s Guide to Tungsten Carbide</i></p>

                </div>
                <div class="col-xs-12 col-sm-3">
                  <div class="col-xs-12">
                    <a href="https://itunes.apple.com/us/app/general-carbide-toolbox/id983630318?mt=8&uo=6&at=&ct="><img class="app-buttons" src="assets/imgs/iPhoneAppStore.png" class="img-responsive" /></a>
                  </div>
                  <div class="col-xs-12">
                    <a href="https://play.google.com/store/apps/details?id=com.coolappz.gc_mobile"><img class="app-buttons" src="assets/imgs/AndroidAppStore.png" class="img-responsive" /></a>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-xs-12 col-sm-10">
              </div>
          </div>
        </div>

        <div class="section" id="section-1">
          <div class="row">
            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-12">
                  <h3>Grade Selector</h3>
                </div>
                <div class="col-xs-12 col-sm-9">
                  <p>Let our interactive guide help you to select the best grade for your specific application. Narrow your choices by industry and performance characteristics.</p>
                  <a href="http://www.levydev.com/gc/index.php">
                    <img style="width: 240px;" src="assets/imgs/GradeSelector.jpg" />
                    <p>Let's Get Started</p>
                  </a>
                </div>
                <div class="col-xs-12 col-sm-3">
                  <!-- Section side content goes here -->
                </div>
              </div>
            </div>
              <div class="col-xs-12 col-sm-10">
              </div>
          </div>
        </div>
      </div>

        <div class="section" id="section-2">
          <div class="row">
                <div class="col-xs-12">
                  <a name="conversion"></a>
                  <h3>Conversion Calculator</h3>
                </div>
                <div class="col-xs-12">
                  <p>Allows you to convert measurements related to Pressure, Density, Mass, Length, Force and Temperature from English to metric units.</p>
                  <div class="row calc panel panel-default">
                    <div class="col-xs-12 col-sm-3">
                      <div class="col-xs-12">
                        <table>
                          <tbody>
                            <tr>
                              <td>
                                <table>
                                  <tbody>
                                  <form>
                                    <fieldset>
                                      <tr>
                                        <td>
                                          <label for="userInput">psi</label><br />
                                          <input type="text" id="userInput" name="userInput" /><br />
                                        </td>

                                      </tr>
                                      <tr>
                                        <td>
                                          <label for="output">kPa</label><br />
                                          <input type="text" id="output" name="output" /><br />
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <input type="button" id="calc" onclick="convert(6.8948)" value="Calculate"  />
                                        </td>
                                      </tr>
                                    </fieldset>
                                  </form>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-9">
                      <!-- Selection array -->
                      <div class="col-xs-12">
                        <div class="col-xs-4">
                          <ul class="conversion-list panel panel-default">
                          	<li class="heading panel-heading">Pressure</li>
                              <li><a href="#conversion" class="calc-btn" call="multiply(6.8948)">psi to kPa</a></li>
                              <li><a href="#conversion" class="calc-btn" call="multiply(0.00689)">psi to MPa</a></li>
                              <li><a href="#conversion" class="calc-btn" call="multiply(0.00000689)">psi to GPa</a></li>
                              <li><a href="#conversion" class="calc-btn" call="multiply(0.145)">kPa to psi</a></li>
                              <li><a href="#conversion" class="calc-btn" call="multiply(145)">MPa to psi</a></li>
                              <li><a href="#conversion" class="calc-btn" call="multiply(145038)">GPa to psi</a></li>
                          </ul>
                        </div>
                        <div class="col-xs-4">
                          <ul class="conversion-list panel panel-default">
                          	<li class="heading panel-heading">Length</li>
                              <li><a href="#conversion" class="calc-btn" call="multiply(25400)">inch to micron</a></li>
                              <li><a href="#conversion" class="calc-btn" call="multiply(25.4)">inch to millimeter</a></li>
                              <li><a href="#conversion" class="calc-btn" call="multiply(0.00004)">micron to inch</a></li>
                              <li><a href="#conversion" class="calc-btn" call="multiply(0.03937)">millimeter to inch</a></li>
                          </ul>
                        </div>
                        <div class="col-xs-4">
                          <ul class="conversion-list panel panel-default">
                          	<li class="heading panel-heading">Temperature</li>
                              <li><a href="#conversion" class="calc-btn" call="multiply(1.8)">in/(in&deg;F) to m/(M&deg;C)</a>
                              <li><a href="#conversion" class="calc-btn" call="Fc()">&deg;F to &deg;C</a></li>
                              <li><a href="#conversion" class="calc-btn" call="Fk()">&deg;F to &deg;K</a></li>
                              <li><a href="#conversion" class="calc-btn" call="Cf()">&deg;C to &deg;F</a></li>
                              <li><a href="#conversion" class="calc-btn" call="Kf()">&deg;K to &deg;F</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-xs-12">
                        <div class="col-xs-4">
                          <ul class="conversion-list panel panel-default">
                          	<li class="heading panel-heading">Density</li>
                              <li><a href="#conversion" class="calc-btn" call="multiply(27.68)">lb/in<sup>3</sup> to g/cm<sup>3</sup></a></li>
                              <li><a href="#conversion" class="calc-btn" call="multiply(0.03613)">g/cm<sup>3</sup> to lb/in<sup>3</sup></a></li>
                          </ul>
                        </div>
                        <div class="col-xs-4">
                          <ul class="conversion-list panel panel-default">
                          	<li class="heading panel-heading">Mass</li>
                              <li><a href="#conversion" class="calc-btn" call="multiply(0.4536)">pound to kilogram</a></li>
                              <li><a href="#conversion" class="calc-btn" call="multiply(2.2046)">kilogram to pound</a></li>
                          </ul>
                        </div>
                        <div class="col-xs-4">
                          <ul class="conversion-list panel panel-default">
                          	<li class="heading panel-heading">Force</li>
                              <li><a href="#conversion" class="calc-btn" call="multiply(4.448)">lbf to N</a></li>
                              <li><a href="#conversion" class="calc-btn" call="multiply(0.225)">N to lbf</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>



            <div class="col-xs-12 col-sm-10">
            </div>
          </div>
        </div>
        <div class="interior-content">
        <div class="section" id="section-3">
          <div class="row">
            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-12">
                  <h3>Hardness Conversion Scales</h3>
                </div>
                <div class="col-xs-12 col-sm-9">
                  <p>Makes it easy for you to convert from Rockwell “A” to Rockwell “C” (HRA-HRC), as well as from HRA to Vickers HV30 and HV10 values.</p>
                </div>
                <div class="col-xs-12 col-sm-3">
                  <div class="pdf-wrap">
                    <a href="assets/pdf/GCRockwellHardness.pdf" target="_blank">
                      <table><tbody><tr>
                        <td><img class="pdf-icon" src="assets/imgs/pdf.png" /></td>
                        <td valign="middle"><p class="pdf-filename">Rockwell Hardness Conversion Chart</p></td>
                      </tr></tbody></table>
                    </a>
                  </div>
                  <div class="pdf-wrap">
                    <a href="assets/pdf/GCVickersHardness.pdf" target="_blank">
                      <table><tbody><tr>
                        <td><img class="pdf-icon" src="assets/imgs/pdf.png" /></td>
                        <td valign="middle"><p class="pdf-filename">Vickers Hardness Conversion Chart</p></td>
                      </tr></tbody></table>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-10">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-3">
      <div id="nav-anchor"></div>
      <div class="interior-nav"><!--
        <ul id="nav" class="nav">
          <span><li><a href="#top">Back to Top</a></li></span>
          <span><li class="selected"><a href="#section-0">Toolbox</a></li></span>
          <span><li><a href="#section-1">Grade Selector</a></li></span>
          <span><li><a href="#section-2">Conversion Calculators</a></li></span>
        </ul>-->
      </div>
    </div>
  </div>
</div>
<?php include_once('includes/footer.php'); ?>



<script type="text/javascript">

$(document).ready(function() {

	$('a.calc-btn').click(function() {

		var aClass = $(this).html().split(" to ");
		var call = $(this).attr('call');

		$('form').fadeOut("slow", function() {

			$("label[for='userInput']").html(aClass[0]);
			$("label[for='output']").html(aClass[1]);
      $("input#userInput").val(null);
			$("input#output").val(null);
			$("input#calc").attr("onClick", call);

			$('form').fadeIn("slow");

		});

	});

});

function multiply(m) {
	var multiplier = m;
	var input = $("input#userInput").val();
	$("input#output").val(parseFloat(input) * multiplier);
}

function Fc() {
	var input = $("input#userInput").val();
	$("input#output").val((parseFloat(input)-32)/(1.8));
}

function Fk() {
	var input = $("input#userInput").val();
	$("input#output").val((parseFloat(input)+459.67)/(1.8));
}

function Cf() {
	var input = $("input#userInput").val();
	$("input#output").val((parseFloat(input)*1.8)+32);
}

function Kf() {
	var input = $("input#userInput").val();
	$("input#output").val((parseFloat(input)*1.8)-459.67);
}

</script>
