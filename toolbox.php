<?php include_once('includes/header.php'); ?>
<div class="interior-page-wrap container">
  <!--  -->
  <div class="row">
    <div class="col-xs-9">
      <div class="interior-header-image">
          <img class="img-responsive" />
      </div>
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
              <!-- Section side content goes here -->
            </div>
          </div>
        </div>
      </div>
      <div class="section" id="section-1">
        <div class="row">
          <div class="col-xs-12">
            <div class="row">
              <div class="col-xs-12 col-sm-9">
                <h3>Grade Selector</h3>
                <p>Let our interactive guide help you to select the best grade for your specific application. Narrow your choices by industry and performance characteristics.</p>
                <a href="http://www.levydev.com/gc/index.php"><img src="assets/imgs/GradeSelector.jpg" /></a>
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
      <div class="section" id="section-2">
        <div class="row">
          <div class="col-xs-12">
            <div class="row">
              <div class="col-xs-12 col-sm-9">
                <a name="conversion"></a>
                <h3>Conversion Calculator</h3>
                <p>Allows you to convert measurements related to Pressure, Density, Mass, Length, Force and Temperature from English to metric units.</p>
                <form>
                	<fieldset>
                    <label for="userInput">psi</label>
                    <input type="text" id="userInput" name="userInput" /><br />

                    <label for="output">kPa</label>
                    <input type="text" id="output" name="output" /><br />

                    <input type="button" id="calc" onclick="convert(6.8948)" value="Calculate"  />
                	</fieldset>
                </form>

                <div class="row">
                  <div class="col-xs-12 col-sm-6">
                      <ul class="conversion-list">
                      	<li class="heading">Pressure</li>
                          <li><a href="#conversion" class="calc-btn" call="multiply(6.8948)">psi to kPa</a></li>
                          <li><a href="#conversion" class="calc-btn" call="multiply(0.00689)">psi to MPa</a></li>
                          <li><a href="#conversion" class="calc-btn" call="multiply(0.00000689)">psi to GPa</a></li>
                          <li><a href="#conversion" class="calc-btn" call="multiply(0.145)">kPa to psi</a></li>
                          <li><a href="#conversion" class="calc-btn" call="multiply(145)">MPa to psi</a></li>
                          <li><a href="#conversion" class="calc-btn" call="multiply(145038)">GPa to psi</a></li>
                      </ul>

                      <ul class="conversion-list">
                      	<li class="heading">Density</li>
                          <li><a href="#conversion" class="calc-btn" call="multiply(27.68)">lb/in<sup>3</sup> to g/cm<sup>3</sup></a></li>
                          <li><a href="#conversion" class="calc-btn" call="multiply(0.03613)">g/cm<sup>3</sup> to lb/in<sup>3</sup></a></li>
                      </ul>

                      <ul class="conversion-list">
                      	<li class="heading">Mass</li>
                          <li><a href="#conversion" class="calc-btn" call="multiply(0.4536)">pound to kilogram</a></li>
                          <li><a href="#conversion" class="calc-btn" call="multiply(2.2046)">kilogram to pound</a></li>
                      </ul>

                  </div>
                  <div class="col-xs-12 col-sm-6">
                      <ul class="conversion-list">
                      	<li class="heading">Length</li>
                          <li><a href="#conversion" class="calc-btn" call="multiply(25400)">inch to micron</a></li>
                          <li><a href="#conversion" class="calc-btn" call="multiply(25.4)">inch to millimeter</a></li>
                          <li><a href="#conversion" class="calc-btn" call="multiply(0.00004)">micron to inch</a></li>
                          <li><a href="#conversion" class="calc-btn" call="multiply(0.03937)">millimeter to inch</a></li>
                      </ul>

                      <ul class="conversion-list">
                      	<li class="heading">Force</li>
                          <li><a href="#conversion" class="calc-btn" call="multiply(4.448)">lbf to N</a></li>
                          <li><a href="#conversion" class="calc-btn" call="multiply(0.225)">N to lbf</a></li>
                      </ul>

                      <ul class="conversion-list">
                      	<li class="heading">Temperature</li>
                          <li><a href="#conversion" class="calc-btn" call="multiply(1.8)">in/(in&deg;F) to m/(M&deg;C)</a>
                          <li><a href="#conversion" class="calc-btn" call="Fc()">&deg;F to &deg;C</a></li>
                          <li><a href="#conversion" class="calc-btn" call="Fk()">&deg;F to &deg;K</a></li>
                          <li><a href="#conversion" class="calc-btn" call="Cf()">&deg;C to &deg;F</a></li>
                          <li><a href="#conversion" class="calc-btn" call="Kf()">&deg;K to &deg;F</a></li>
                      </ul>
                  </div>
                </div>
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
      <div class="section" id="section-3">
        <div class="row">
          <div class="col-xs-12">
            <div class="row">
              <div class="col-xs-12 col-sm-9">
                <h3>Hardness Conversion Scales</h3>
                <p>Makes it easy for you to convert from Rockwell “A” to Rockwell “C” (HRA-HRC), as well as from HRA to Vickers HV30 and HV10 values.</p>
                <div class="row">
                  <div class="col-xs-12 col-sm-6">
                    <table class="hardness-scale">
                      <tr>
                          <th>Rockwell &ldquo;A&rdquo;</th>
                            <th>Rockwell &ldquo;C&rdquo;</th>
                        </tr>
                        <tr>
                          <td>91.8-92.8</td>
                            <td>79.5-81.5</td>
                        </tr>
                        <tr>
                          <td>91.5-92.5</td>
                            <td>79.0-81.0</td>
                        </tr>
                        <tr>
                          <td>90.5-91.5</td>
                            <td>77.0-79.0</td>
                        </tr>
                        <tr>
                          <td>90.2-91.2</td>
                            <td>76.5-79.5</td>
                        </tr>
                        <tr>
                          <td>89.8-90.8</td>
                            <td>75.6-77.6</td>
                        </tr>
                        <tr>
                          <td>89.0-90.0</td>
                            <td>74.0-76.0</td>
                        </tr>
                        <tr>
                          <td>88.5-89.5</td>
                            <td>73.0-75.0</td>
                        </tr>
                        <tr>
                          <td>88.0-89.0</td>
                            <td>72.0-74.0</td>
                        </tr>
                        <tr>
                          <td>87.5-88.5</td>
                            <td>71.0-73.0</td>
                        </tr>
                        <tr>
                          <td>87.0-88.0</td>
                            <td>71.0-72.0</td>
                        </tr>
                        <tr>
                          <td>86.0-87.0</td>
                            <td>69.0-71.0</td>
                        </tr>
                        <tr>
                          <td>83.0-84.5</td>
                            <td>63.0-66.0</td>
                        </tr>
                        <tr>
                          <td>81.5-83.0</td>
                            <td>61.0-63.0</td>
                        </tr>
                    </table>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                    <table class="hardness-scale">
                    	<tr>
                        	<th>HV10</th>
                            <th>HV30</th>
                            <th>HRa</th>
                        </tr>
                        <tr><td>790</td><td>780</td><td>83.3</td></tr>
                        <tr class="gray"><td>800</td><td>790</td><td>83.4</td></tr>
                        <tr><td>810</td><td>800</td><td>83.6</td></tr>
                        <tr><td>820</td><td>810</td><td>83.7</td></tr>
                        <tr><td>830</td><td>820</td><td>83.9</td></tr>
                        <tr><td>840</td><td>830</td><td>84.0</td></tr>
                        <tr><td>850</td><td>840</td><td>84.2</td></tr>
                        <tr><td>860</td><td>850</td><td>84.3</td></tr>
                        <tr><td>870</td><td>860</td><td>84.4</td></tr>
                        <tr><td>880</td><td>870</td><td>84.5</td></tr>
                        <tr><td>890</td><td>880</td><td>84.6</td></tr>
                        <tr class="gray"><td>900</td><td>890</td><td>84.7</td></tr>
                        <tr><td>910</td><td>900</td><td>84.8</td></tr>
                        <tr><td>920</td><td>910</td><td>85.0</td></tr>
                        <tr><td>930</td><td>920</td><td>85.1</td></tr>
                        <tr><td>940</td><td>930</td><td>85.2</td></tr>
                        <tr><td>950</td><td>940</td><td>85.3</td></tr>
                        <tr><td>960</td><td>950</td><td>85.5</td></tr>
                        <tr><td>970</td><td>960</td><td>85.6</td></tr>
                        <tr><td>980</td><td>970</td><td>85.8</td></tr>
                        <tr><td>990</td><td>980</td><td>85.9</td></tr>
                        <tr class="gray"><td>1000</td><td>990</td><td>86.0</td></tr>
                        <tr><td>1010</td><td>1000</td><td>86.1</td></tr>
                        <tr><td>1020</td><td>1010</td><td>86.3</td></tr>
                        <tr><td>1030</td><td>1020</td><td>86.4</td></tr>
                        <tr><td>1040</td><td>1030</td><td>86.5</td></tr>
                        <tr><td>1050</td><td>1040</td><td>86.6</td></tr>
                        <tr><td>1060</td><td>1050</td><td>86.7</td></tr>
                        <tr><td>1070</td><td>1060</td><td>86.8</td></tr>
                        <tr><td>1080</td><td>1070</td><td>87.0</td></tr>
                        <tr><td>1090</td><td>1080</td><td>87.2</td></tr>
                        <tr class="gray"><td>1100</td><td>1090</td><td>87.3</td></tr>
                        <tr><td>1110</td><td>1100</td><td>87.3</td></tr>
                        <tr><td>1120</td><td>1110</td><td>87.5</td></tr>
                        <tr><td>1130</td><td>1120</td><td>87.6</td></tr>
                        <tr><td>1140</td><td>1130</td><td>87.7</td></tr>
                        <tr><td>1150</td><td>1140</td><td>87.8</td></tr>
                        <tr><td>1160</td><td>1150</td><td>87.9</td></tr>
                        <tr><td>1170</td><td>1160</td><td>88.0</td></tr>
                        <tr><td>1180</td><td>1170</td><td>88.1</td></tr>
                        <tr><td>1190</td><td>1180</td><td>88.2</td></tr>
                        <tr class="gray"><td>1200</td><td>1190</td><td>88.2</td></tr>
                        <tr><td>1210</td><td>1200</td><td>88.3</td></tr>
                        <tr><td>1220</td><td>1210</td><td>88.5</td></tr>
                        <tr><td>1230</td><td>1220</td><td>88.6</td></tr>
                        <tr><td>1240</td><td>1230</td><td>88.7</td></tr>
                        <tr><td>1250</td><td>1240</td><td>88.8</td></tr>
                        <tr><td>1260</td><td>1250</td><td>88.9</td></tr>
                        <tr><td>1270</td><td>1260</td><td>89.1</td></tr>
                        <tr><td>1280</td><td>1270</td><td>89.2</td></tr>
                        <tr><td>1290</td><td>1280</td><td>89.3</td></tr>
                        <tr class="gray"><td>1300</td><td>1290</td><td>89.4</td></tr>
                        <tr><td>1310</td><td>1300</td><td>89.5</td></tr>
                        <tr><td>1320</td><td>1310</td><td>89.6</td></tr>
                        <tr><td>1330</td><td>1320</td><td>89.7</td></tr>
                        <tr><td>1340</td><td>1330</td><td>89.8</td></tr>
                        <tr><td>1350</td><td>1340</td><td>89.9</td></tr>
                        <tr><td>1360</td><td>1350</td><td>90.0</td></tr>
                        <tr><td>1370</td><td>1355</td><td>90.0</td></tr>
                        <tr><td>1380</td><td>1360</td><td>90.1</td></tr>
                        <tr><td>1390</td><td>1370</td><td>90.2</td></tr>
                        <tr class="gray"><td>1400</td><td>1380</td><td>90.3</td></tr>
                        <tr><td>1410</td><td>1390</td><td>90.3</td></tr>
                        <tr><td>1420</td><td>1400</td><td>90.4</td></tr>
                        <tr><td>1430</td><td>1410</td><td>90.5</td></tr>
                        <tr><td>1440</td><td>1420</td><td>90.6</td></tr>
                        <tr><td>1450</td><td>1430</td><td>90.7</td></tr>
                        <tr><td>1460</td><td>1440</td><td>90.8</td></tr>
                        <tr><td>1470</td><td>1450</td><td>90.8</td></tr>
                        <tr><td>1480</td><td>1460</td><td>90.9</td></tr>
                        <tr><td>1490</td><td>1470</td><td>91.0</td></tr>
                        <tr class="gray"><td>1500</td><td>1480</td><td>91.1</td></tr>
                        <tr><td>1510</td><td>1490</td><td>91.2</td></tr>
                        <tr><td>1520</td><td>1500</td><td>91.2</td></tr>
                        <tr><td>1530</td><td>1510</td><td>91.3</td></tr>
                        <tr><td>1540</td><td>1520</td><td>91.4</td></tr>
                        <tr><td>1550</td><td>1530</td><td>91.5</td></tr>
                        <tr><td>1560</td><td>1540</td><td>91.5</td></tr>
                        <tr><td>1570</td><td>1550</td><td>91.6</td></tr>
                        <tr><td>1580</td><td>1560</td><td>91.6</td></tr>
                        <tr><td>1590</td><td>1570</td><td>91.7</td></tr>
                        <tr class="gray"><td>1600</td><td>1580</td><td>91.8</td></tr>
                        <tr><td>1610</td><td>1590</td><td>91.9</td></tr>
                        <tr><td>1620</td><td>1600</td><td>91.9</td></tr>
                        <tr><td>1630</td><td>1610</td><td>92.0</td></tr>
                        <tr><td>1640</td><td>1620</td><td>92.1</td></tr>
                        <tr><td>1650</td><td>1630</td><td>92.1</td></tr>
                        <tr><td>1660</td><td>1640</td><td>92.2</td></tr>
                        <tr><td>1670</td><td>1650</td><td>92.2</td></tr>
                        <tr><td>1680</td><td>1660</td><td>92.3</td></tr>
                        <tr><td>1690</td><td>1670</td><td>92.3</td></tr>
                        <tr class="gray"><td>1700</td><td>1680</td><td>92.4</td></tr>
                        <tr><td>1710</td><td>1685</td><td>92.4</td></tr>
                        <tr><td>1720</td><td>1690</td><td>92.5</td></tr>
                        <tr><td>1730</td><td>1700</td><td>92.5</td></tr>
                        <tr><td>1740</td><td>1710</td><td>92.6</td></tr>
                        <tr><td>1750</td><td>1720</td><td>92.6</td></tr>
                        <tr><td>1760</td><td>1730</td><td>92.7</td></tr>
                        <tr><td>1770</td><td>1740</td><td>92.7</td></tr>
                        <tr><td>1780</td><td>1750</td><td>92.8</td></tr>
                        <tr><td>1790</td><td>1760</td><td>92.8</td></tr>
                        <tr class="gray"><td>1800</td><td>1770</td><td>92.9</td></tr>
                        <tr><td>1810</td><td>1780</td><td>92.9</td></tr>
                        <tr><td>1820</td><td>1790</td><td>93.0</td></tr>
                        <tr><td>1830</td><td>1800</td><td>93.0</td></tr>
                        <tr><td>1840</td><td>1810</td><td>93.1</td></tr>
                        <tr><td>1850</td><td>1820</td><td>93.1</td></tr>
                        <tr><td>1860</td><td>1830</td><td>93.2</td></tr>
                        <tr><td>1870</td><td>1840</td><td>93.2</td></tr>
                        <tr><td>1880</td><td>1850</td><td>93.3</td></tr>
                        <tr><td>1890</td><td>1860</td><td>93.3</td></tr>
                        <tr class="gray"><td>1900</td><td>1870</td><td>93.4</td></tr>
                        <tr><td>1910</td><td>1880</td><td>93.4</td></tr>
                        <tr><td>1920</td><td>1885</td><td>93.4</td></tr>
                        <tr><td>1930</td><td>1890</td><td>93.5</td></tr>
                        <tr><td>1940</td><td>1900</td><td>93.5</td></tr>
                        <tr><td>1950</td><td>1910</td><td>93.6</td></tr>
                        <tr><td>1960</td><td>1920</td><td>93.6</td></tr>
                        <tr><td>1970</td><td>1930</td><td>93.7</td></tr>
                        <tr><td>1980</td><td>1940</td><td>93.7</td></tr>
                        <tr><td>1990</td><td>1950</td><td>93.8</td></tr>
                        <tr class="gray"><td>2000</td><td>1960</td><td>93.8</td></tr>
                        <tr><td>2010</td><td>1970</td><td>93.8</td></tr>
                        <tr><td>2020</td><td>1980</td><td>93.9</td></tr>
                        <tr><td>2030</td><td>1990</td><td>93.9</td></tr>
                        <tr><td>2040</td><td>2000</td><td>94.0</td></tr>
                        <tr><td>2050</td><td>2010</td><td>94.0</td></tr>
                        <tr><td>2060</td><td>2020</td><td>94.0</td></tr>
                        <tr><td>2070</td><td>2030</td><td>94.1</td></tr>
                        <tr><td>2080</td><td>2040</td><td>94.1</td></tr>
                        <tr><td>2090</td><td>2050</td><td>94.2</td></tr>
                        <tr class="gray"><td>2100</td><td>2060</td><td>94.2</td></tr>
                        <tr><td>2110</td><td>2070</td><td>94.2</td></tr>
                        <tr><td>2120</td><td>2080</td><td>94.3</td></tr>
                        <tr><td>2130</td><td>2090</td><td>94.3</td></tr>
                        <tr><td>2140</td><td>2100</td><td>94.3</td></tr>
                        <tr><td>2150</td><td>2110</td><td>94.4</td></tr>
                        <tr class="gray"><td>2200</td><td>2130</td><td>94.8</td></tr>
                        <tr><td>2300</td><td>2200</td><td>95.2</td></tr>
                        <tr><td>2350</td><td>2250</td><td>95.4</td></tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3">
                <div class="pdf-wrap">
                  <p>Rockwell Hardness Conversion Chart</p>
                  <a href="assets/pdf/GCRockwellHardness.pdf" target="_blank"><img class="pdf-icon" src="assets/imgs/pdf.png" /></a>
                  <a href="assets/pdf/GCRockwellHardness.pdf" target="_blank"><p class="pdf-filename">GCRockwellHardness.pdf <span>(63KB)</span></p></a>
                </div>
                <div class="pdf-wrap">
                  <p>Vickers Hardness Conversion Chart</p>
                  <a href="assets/pdf/GCVickersHardness.pdf" target="_blank"><img class="pdf-icon" src="assets/imgs/pdf.png" /></a>
                  <a href="assets/pdf/GCVickersHardness.pdf" target="_blank"><p class="pdf-filename">GCVickersHardness.pdf <span>(100KB)</span></p></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-10">
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
