<?php 
if(!isset($_SESSION))
{
	session_start();

}
?>
<?php 
if(!isset($_SESSION['user']))
{
	header("location:login.php?msg=login first");

}
?>

<?php
include('header_air.php')
?>

 <body background="../images/56.jpg">
 <div class="container" style="width: 95%;">
 <div class="row">
 


	<div class="col-md-12"style="background-color:lightgrey">
	
   <?php include('home_menu.php')?>
   </div>
   <div class="col-md-6"style="background-color:lightgrey">
      
    <h1><img src="../images/step1.gif"></h1>
   
	<br>
    <form method="POST" action="select_airroute_action.php" style="broder:1px solid;">
	<b>From</B> <select name="source">
	<option value="Amritsar">Leaving from...                                          </option>
			<option value="Amritsar">Amritsar                                          </option>
			<option value="Agartala">Agartala                                            </option>
			<option value="Ahmedabad">Ahmedabad                                         </option>
			<option value="Bengaluru">Bengluru                                           </option>
			<option value="Bagdogra">Bagdogra                                         </option>
			<option value="Belagavi">Belagavi                                              </option>
			<option value="Chandigarh">Chandigarh         			</option>
			<option value="Chennai">Chennai                                      
			</option>
			
			<option value="Dehradoon">Dehradoon                                         </option>
			<option value="Delhi">Delhi                           </option>
			<option value="Dhaka">Dhaka                                           </option>
			<option value="Dharamshala">Dharamsala                                        </option>
			<option value="Goa">Goa                                        </option>
			<option value="Guwahati">Guwahati                      </option>
			<option value="Gwalior Airport">Gwalior Airport                             </option>
		    <option value="Hyderabad">Hyderabad                            </option>
			<option value="Jaipur">Jaipur                                             </option>
			<option value="Jammu">Jammu                                             </option>
			<option value="Jbalpur">Jbalpur                                             </option>
			<option value="Jodhpur">Jodhpur                                           </option>
			<option value="Kabul">Kabul                                     </option>
			<option value="Kochi">Kochi                                           </option>
			<option value="Kolkata">Kolkata                                             </option>
			<option value="Manglore">Manglore                                           </option>
			<option value="Mumbai">Mumbai                                       </option>
			<option value="Patna">Patna                                 </option>
			<option value="Pune">Pune                                         </option>
			<option value="Rajahmundry">Rajahmundry                                  </option>
			<option value="Silchar">silchar                                    </option>
			<option value="Srinagar">Srinagar                                            </option>
			<option value="Surat">Surat                                       </option>
			<option value="Tirupati">Tirupati                                            </option>
			<option value="Udaipur">Udaipur                                          </option>
			<option value="Varanasi">Varanasi                                        </option>
			<option value="Vijaywada">Vijaywada                                            </option>
			<option value="Vishakhapatnam">Vishakhapatnam                                   </option>
			
			
			</select>
			&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<b>Destination</B> <select name="Dest">
            <option value="Amritsar">going to...                                        </option>
			<option value="Amritsar">Amritsar                                          </option>
			<option value="Baddi">Baddi                                             </option>
			<option value="Baijnath">Baijnath                                          </option>
			<option value="Bhunter">Bhunter                                           </option>
			<option value="Bilaspur">Bilaspur                                          </option>
			<option value="BIR">BIR                                               </option>
			<option value="Chamba">Chamba                                            </option>
			<option value="Chamunda">Chamunda                                          </option>
			<option value="Chandigarh">Chandigarh                                        </option>
			<option value="187">Chintpurni                                        </option>
			<option value="28">Dehra                                             </option>
			<option value="34">Dehradoon                                         </option>
			<option value="9">Delhi ISBT Kashmiri Gate                          </option>
			<option value="421">Dhameta                                           </option>
			<option value="195">Dharampur MND                                     </option>
			<option value="14">Dharamsala                                        </option>
			<option value="883">Fatehpur                                          </option>
			<option value="191">Ghumarwin                                         </option>
			<option value="48">Hamirpur                                          </option>
			<option value="26">Haridwar                                          </option>
			<option value="1280">Himachal Bhawan Chandigarh                        </option>
			<option value="8">Himachal Bhawan Delhi                             </option>
			<option value="100">Jahoo                                             </option>
			<option value="31">Jammu                                             </option>
			<option value="62">Jassur                                            </option>
			<option value="43">Jawalaji                                          </option>
			<option value="216">Jawali                                            </option>
			<option value="133">Jhandutta                                         </option>
			<option value="223">Joginder Nagar                                    </option>
			<option value="15">Kangra                                            </option>
			<option value="30">Katra                                             </option>
			<option value="11">Kullu                                             </option>
			<option value="577">Lakkar Bazar                                      </option>
			<option value="10">Manali                                            </option>
			<option value="12">Mandi                                             </option>
			<option value="67">Marotan                                           </option>
			<option value="42">Mcleodganj                                        </option>
			<option value="1284">Mohali Bus Stand                                  </option>
			<option value="170">Nagrota                                           </option>
			<option value="1209">Nagrota Bagwan                                    </option>
			<option value="321">Nagrota Surian                                    </option>
			<option value="49">Nahan                                             </option>
			<option value="56">Nalagarh                                          </option>
			<option value="50">Nurpur                                            </option>
			<option value="164">Palampur                                          </option>
			<option value="22">Pathankot                                         </option>
			<option value="47">Ponta                                             </option>
			<option value="215">Raja Ka Talab                                     </option>
			<option value="64">Rampur                                            </option>
			<option value="122">Rehan                                             </option>
			<option value="378">Riwalser                                          </option>
			<option value="63">Rohru                                             </option>
			<option value="40">Sarkaghat                                         </option>
			<option value="849">Seoh                                              </option>
			<option value="75">Shahpur                                           </option>
			<option value="1">Shimla ISBT Tutikandi                             </option>
			<option value="2">Solan                                             </option>
			<option value="114">Sujanpur                                          </option>
			<option value="87">Sunder Nagar                                      </option>
			<option value="231">Suni                                              </option>
			<option value="1257">TANDA (KANGRA)                                    </option>
			<option value="una">Una                                               </option>
			<option value="77">Vaknaghat                                         </option>
			</select>
		
	&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<b>Adults:</b> &nbsp; &nbsp; &nbsp; <b>Child:</b><br>
	<b>No. of Travellers:</b><select><option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
	</select>&nbsp; &nbsp; &nbsp; &nbsp;
	<select><option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option></select>
	<br><br><br><b>Date of Travel:</b><?php include('date.php')?>

									  
	
	<center><input type="submit" value="Get Schedule" style="background-color: blueviolet;width: 119px;height: 33px;"><br><br></center>
	</form></div>
 
<div class="col-md-6"><br>
 <img src="../images/travelmap.jpg" style="height: 320px;width: 620px;"></div>
</div>
</div>	
	
	
	
	<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html><script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
<?php
include('footer.php')?>
</body>
</html>