<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/serv/p4.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/icons/favicon-16x16.png">
    <link rel="manifest" href="../img/icons/site.webmanifest">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <title>KProfile</title>
</head>

<body>
    <header id="main-header">
        <div class="headings">
            <h1 class="bg-header"><span class="header-span">K</span>Profile</h1>
            <h4 class="sm-header">A simple resume generator</h4>
        </div>
    </header>
    <main id="main-content">
        <div class="container">
            <form action="p4-form.php" method="post" enctype="multipart/form-data">
                <div class="section personal-info">
                    <h1 class="section-title">1. Personal Information</h1>
                    <div class="form-elements">
                        <div class="inputs fields">
                            <input type="text" name="name" id="name" placeholder="Full Name *" required><br>
                            <div class="numbers">
                                <input type="number" name="landline" id="landline" placeholder="Landline Number *" required>
                                <input type="number" name="mobile" id="mobile" placeholder="Mobile Number *" required><br>
                            </div>
                            <input type="text" name="address" id="address" placeholder="Home Address *" required><br>
                            <input type="email" name="email" id="email" placeholder="Email Address *" required><br>
                        </div>
                        <div class="inputs selections">
                            <label for="sex">Sex</label>
                            <input type="radio" name="sex" id="sex-male" value="male" required>Male
                            <input type="radio" name="sex" id="sex-female" value="female" required>Female
                            <br>
                            <label for="dob">Date of Birth</label>
                            <input type="date" name="dob" id="dob" required>
                            <br>
                            <label for="nationality">Nationality</label>
                            <select name="nationality" required>
                                <option value="">-- select one --</option>
                                <option value="afghan">Afghan</option>
                                <option value="albanian">Albanian</option>
                                <option value="algerian">Algerian</option>
                                <option value="american">American</option>
                                <option value="andorran">Andorran</option>
                                <option value="angolan">Angolan</option>
                                <option value="antiguans">Antiguans</option>
                                <option value="argentinean">Argentinean</option>
                                <option value="armenian">Armenian</option>
                                <option value="australian">Australian</option>
                                <option value="austrian">Austrian</option>
                                <option value="azerbaijani">Azerbaijani</option>
                                <option value="bahamian">Bahamian</option>
                                <option value="bahraini">Bahraini</option>
                                <option value="bangladeshi">Bangladeshi</option>
                                <option value="barbadian">Barbadian</option>
                                <option value="barbudans">Barbudans</option>
                                <option value="batswana">Batswana</option>
                                <option value="belarusian">Belarusian</option>
                                <option value="belgian">Belgian</option>
                                <option value="belizean">Belizean</option>
                                <option value="beninese">Beninese</option>
                                <option value="bhutanese">Bhutanese</option>
                                <option value="bolivian">Bolivian</option>
                                <option value="bosnian">Bosnian</option>
                                <option value="brazilian">Brazilian</option>
                                <option value="british">British</option>
                                <option value="bruneian">Bruneian</option>
                                <option value="bulgarian">Bulgarian</option>
                                <option value="burkinabe">Burkinabe</option>
                                <option value="burmese">Burmese</option>
                                <option value="burundian">Burundian</option>
                                <option value="cambodian">Cambodian</option>
                                <option value="cameroonian">Cameroonian</option>
                                <option value="canadian">Canadian</option>
                                <option value="cape verdean">Cape Verdean</option>
                                <option value="central african">Central African</option>
                                <option value="chadian">Chadian</option>
                                <option value="chilean">Chilean</option>
                                <option value="chinese">Chinese</option>
                                <option value="colombian">Colombian</option>
                                <option value="comoran">Comoran</option>
                                <option value="congolese">Congolese</option>
                                <option value="costa rican">Costa Rican</option>
                                <option value="croatian">Croatian</option>
                                <option value="cuban">Cuban</option>
                                <option value="cypriot">Cypriot</option>
                                <option value="czech">Czech</option>
                                <option value="danish">Danish</option>
                                <option value="djibouti">Djibouti</option>
                                <option value="dominican">Dominican</option>
                                <option value="dutch">Dutch</option>
                                <option value="east timorese">East Timorese</option>
                                <option value="ecuadorean">Ecuadorean</option>
                                <option value="egyptian">Egyptian</option>
                                <option value="emirian">Emirian</option>
                                <option value="equatorial guinean">Equatorial Guinean</option>
                                <option value="eritrean">Eritrean</option>
                                <option value="estonian">Estonian</option>
                                <option value="ethiopian">Ethiopian</option>
                                <option value="fijian">Fijian</option>
                                <option value="filipino">Filipino</option>
                                <option value="finnish">Finnish</option>
                                <option value="french">French</option>
                                <option value="gabonese">Gabonese</option>
                                <option value="gambian">Gambian</option>
                                <option value="georgian">Georgian</option>
                                <option value="german">German</option>
                                <option value="ghanaian">Ghanaian</option>
                                <option value="greek">Greek</option>
                                <option value="grenadian">Grenadian</option>
                                <option value="guatemalan">Guatemalan</option>
                                <option value="guinea-bissauan">Guinea-Bissauan</option>
                                <option value="guinean">Guinean</option>
                                <option value="guyanese">Guyanese</option>
                                <option value="haitian">Haitian</option>
                                <option value="herzegovinian">Herzegovinian</option>
                                <option value="honduran">Honduran</option>
                                <option value="hungarian">Hungarian</option>
                                <option value="icelander">Icelander</option>
                                <option value="indian">Indian</option>
                                <option value="indonesian">Indonesian</option>
                                <option value="iranian">Iranian</option>
                                <option value="iraqi">Iraqi</option>
                                <option value="irish">Irish</option>
                                <option value="israeli">Israeli</option>
                                <option value="italian">Italian</option>
                                <option value="ivorian">Ivorian</option>
                                <option value="jamaican">Jamaican</option>
                                <option value="japanese">Japanese</option>
                                <option value="jordanian">Jordanian</option>
                                <option value="kazakhstani">Kazakhstani</option>
                                <option value="kenyan">Kenyan</option>
                                <option value="kittian and nevisian">Kittian and Nevisian</option>
                                <option value="kuwaiti">Kuwaiti</option>
                                <option value="kyrgyz">Kyrgyz</option>
                                <option value="laotian">Laotian</option>
                                <option value="latvian">Latvian</option>
                                <option value="lebanese">Lebanese</option>
                                <option value="liberian">Liberian</option>
                                <option value="libyan">Libyan</option>
                                <option value="liechtensteiner">Liechtensteiner</option>
                                <option value="lithuanian">Lithuanian</option>
                                <option value="luxembourger">Luxembourger</option>
                                <option value="macedonian">Macedonian</option>
                                <option value="malagasy">Malagasy</option>
                                <option value="malawian">Malawian</option>
                                <option value="malaysian">Malaysian</option>
                                <option value="maldivan">Maldivan</option>
                                <option value="malian">Malian</option>
                                <option value="maltese">Maltese</option>
                                <option value="marshallese">Marshallese</option>
                                <option value="mauritanian">Mauritanian</option>
                                <option value="mauritian">Mauritian</option>
                                <option value="mexican">Mexican</option>
                                <option value="micronesian">Micronesian</option>
                                <option value="moldovan">Moldovan</option>
                                <option value="monacan">Monacan</option>
                                <option value="mongolian">Mongolian</option>
                                <option value="moroccan">Moroccan</option>
                                <option value="mosotho">Mosotho</option>
                                <option value="motswana">Motswana</option>
                                <option value="mozambican">Mozambican</option>
                                <option value="namibian">Namibian</option>
                                <option value="nauruan">Nauruan</option>
                                <option value="nepalese">Nepalese</option>
                                <option value="new zealander">New Zealander</option>
                                <option value="ni-vanuatu">Ni-Vanuatu</option>
                                <option value="nicaraguan">Nicaraguan</option>
                                <option value="nigerien">Nigerien</option>
                                <option value="north korean">North Korean</option>
                                <option value="northern irish">Northern Irish</option>
                                <option value="norwegian">Norwegian</option>
                                <option value="omani">Omani</option>
                                <option value="pakistani">Pakistani</option>
                                <option value="palauan">Palauan</option>
                                <option value="panamanian">Panamanian</option>
                                <option value="papua new guinean">Papua New Guinean</option>
                                <option value="paraguayan">Paraguayan</option>
                                <option value="peruvian">Peruvian</option>
                                <option value="polish">Polish</option>
                                <option value="portuguese">Portuguese</option>
                                <option value="qatari">Qatari</option>
                                <option value="romanian">Romanian</option>
                                <option value="russian">Russian</option>
                                <option value="rwandan">Rwandan</option>
                                <option value="saint lucian">Saint Lucian</option>
                                <option value="salvadoran">Salvadoran</option>
                                <option value="samoan">Samoan</option>
                                <option value="san marinese">San Marinese</option>
                                <option value="sao tomean">Sao Tomean</option>
                                <option value="saudi">Saudi</option>
                                <option value="scottish">Scottish</option>
                                <option value="senegalese">Senegalese</option>
                                <option value="serbian">Serbian</option>
                                <option value="seychellois">Seychellois</option>
                                <option value="sierra leonean">Sierra Leonean</option>
                                <option value="singaporean">Singaporean</option>
                                <option value="slovakian">Slovakian</option>
                                <option value="slovenian">Slovenian</option>
                                <option value="solomon islander">Solomon Islander</option>
                                <option value="somali">Somali</option>
                                <option value="south african">South African</option>
                                <option value="south korean">South Korean</option>
                                <option value="spanish">Spanish</option>
                                <option value="sri lankan">Sri Lankan</option>
                                <option value="sudanese">Sudanese</option>
                                <option value="surinamer">Surinamer</option>
                                <option value="swazi">Swazi</option>
                                <option value="swedish">Swedish</option>
                                <option value="swiss">Swiss</option>
                                <option value="syrian">Syrian</option>
                                <option value="taiwanese">Taiwanese</option>
                                <option value="tajik">Tajik</option>
                                <option value="tanzanian">Tanzanian</option>
                                <option value="thai">Thai</option>
                                <option value="togolese">Togolese</option>
                                <option value="tongan">Tongan</option>
                                <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                <option value="tunisian">Tunisian</option>
                                <option value="turkish">Turkish</option>
                                <option value="tuvaluan">Tuvaluan</option>
                                <option value="ugandan">Ugandan</option>
                                <option value="ukrainian">Ukrainian</option>
                                <option value="uruguayan">Uruguayan</option>
                                <option value="uzbekistani">Uzbekistani</option>
                                <option value="venezuelan">Venezuelan</option>
                                <option value="vietnamese">Vietnamese</option>
                                <option value="welsh">Welsh</option>
                                <option value="yemenite">Yemenite</option>
                                <option value="zambian">Zambian</option>
                                <option value="zimbabwean">Zimbabwean</option>
                            </select>
                        </div>
                    </div>
                    <div class="profile-pic">
                        <div class="img-container">
                            <div class="underlay">
                                Preview Image
                            </div>
                            <div id="profile-img">

                            </div>
                        </div>
                        <div class="img-select button">
                            <label for="img">Select Image</label>
                            <input type="file" name="img" id="img" required>
                        </div>
                    </div>
                </div>
                <div class="section personal-info">
                    <h1 class="section-title">2. Career Objective</h1>
                    <div class="form-elements">
                        <div class="inputs fields">
                            <textarea name="objective" id="objective" cols="50" rows="10" placeholder="Enter career objective" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="section education">
                    <h1 class="section-title">3. Educational Attainment</h1>
                    <div class="form-elements">
                        <div class="school elementary-sec">
                            <div class="inputs fields">
                                <label for="elementary">
                                    <h3>Elementary Education</h3>
                                </label>
                                <input type="text" name="elementary" id="elementary" placeholder="Elementary School *" required>
                                <input type="text" name="e-address" id="elementary-address" placeholder="Address *" required>
                                <label for="from">From</label><input type="date" name="e-from-date" id="from-date" required>
                                <label for="to">To</label><input type="date" name="e-to-date" id="to-date" required>
                                <input type="text" name="e-honors" id="elementary-honors" placeholder="Academic Distinctions (optional)">

                            </div>
                        </div>
                        <div class="school secondary-sec">
                            <div class="inputs fields">
                                <label for="secondary">
                                    <h3>Secondary Education</h3>
                                </label>
                                <input type="text" name="secondary" id="elementary" placeholder="Secondary School *" required>
                                <input type="text" name="s-address" id="elementary-address" placeholder="Address *" required>
                                <label for="from">From</label><input type="date" name="s-from-date" id="from-date" required>
                                <label for="to">To</label><input type="date" name="s-to-date" id="to-date" required>
                                <input type="text" name="s-honors" id="elementary-honors" placeholder="Academic Distinctions (optional)">

                            </div>
                        </div>
                        <div class="school tertiary-sec">
                            <div class="inputs fields">
                                <label for="tertiary">
                                    <h3>Tertiary Education</h3>
                                </label>
                                <input type="text" name="tertiary" id="elementary" placeholder="Tertiary University *" required>
                                <input type="text" name="t-address" id="elementary-address" placeholder="Address *" required>
                                <label for="from">From</label><input type="date" name="t-from-date" id="from-date" required>
                                <label for="to">To</label><input type="date" name="t-to-date" id="to-date" required>
                                <input type="text" name="t-honors" id="elementary-honors" placeholder="Academic Distinctions (optional)">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="section skills">
                    <h1 class="section-title">4. Skills</h1>
                    <div class="form-elements">
                        <h3>List 5 core skills</h3>
                        <div class="inputs ranks">
                            <div class="skill">
                                <input type="text" name="skill1" id="skill" placeholder="Skill 1 *" required>
                                <input type="number" name="skill1-rating" class="rating" placeholder="Skill Rating %" required><br>
                            </div>
                            <div class="skill">
                                <input type="text" name="skill2" id="skill" placeholder="Skill 2 *" required>
                                <input type="number" name="skill2-rating" class="rating" placeholder="Skill Rating %" required><br>
                            </div>
                            <div class="skill">
                                <input type="text" name="skill3" id="skill" placeholder="Skill 3 *" required>
                                <input type="number" name="skill3-rating" class="rating" placeholder="Skill Rating %" required><br>
                            </div>
                            <div class="skill">

                                <input type="text" name="skill4" id="skill" placeholder="Skill 4 *" required>
                                <input type="number" name="skill4-rating" class="rating" placeholder="Skill Rating %" required><br>
                            </div>
                            <div class="skill">

                                <input type="text" name="skill5" id="skill" placeholder="Skill 5 *" required>
                                <input type="number" name="skill5-rating" class="rating" placeholder="Skill Rating %" required><br>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="section affiliations">
                    <h1 class="section-title">5. Affiliations</h1>
                    <div class="form-elements">
                        <div class="affiliates">
                            <div class="inputs fields">
                                <input type="text" name="affiliate1" placeholder="Affiliate 1 (optional)">
                                <label for="from">From</label><input type="date" name="aff1-from-date" id="from-date">
                                <label for="to">To</label><input type="date" name="aff1-to-date" id="to-date">
                            </div>
                        </div>
                        <div class="affiliates">
                            <div class="inputs fields">
                                <input type="text" name="affiliate2" placeholder="Affiliate 2 (optional)">
                                <label for="from">From</label><input type="date" name="aff2-from-date" id="from-date">
                                <label for="to">To</label><input type="date" name="aff2-to-date" id="to-date">

                            </div>
                        </div>
                        <div class="affiliates">
                            <div class="inputs fields">
                                <input type="text" name="affiliate3" placeholder="Affiliate 3 (optional)">
                                <label for="from">From</label><input type="date" name="aff3-from-date" id="from-date">
                                <label for="to">To</label><input type="date" name="aff3-to-date" id="to-date">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="section work">
                    <h1 class="section-title">6. Work Experience</h1>
                    <div class="form-elements">
                        <div class="work work1">
                            <div class="inputs fields">
                                <input type="text" name="work1" placeholder="Job 1 (optional)">
                                <input type="text" name="w1-pos" placeholder="Position (optional)">
                                <input type="text" name="w1-address" placeholder="Address (optional)">
                                <label for="from">From</label><input type="date" name="w1-from-date" id="from-date">
                                <label for="to">To</label><input type="date" name="w1-to-date" id="to-date">
                            </div>
                        </div>
                        <div class="work work2">
                            <div class="inputs fields">
                                <input type="text" name="work2" placeholder="Job 2 (optional)">
                                <input type="text" name="w2-pos" placeholder="Position (optional)">
                                <input type="text" name="w2-address" placeholder="Address (optional)">
                                <label for="from">From</label><input type="date" name="w2-from-date" id="from-date">
                                <label for="to">To</label><input type="date" name="w2-to-date" id="to-date">
                            </div>
                        </div>
                    </div>
                    <div class="submit-btn">
                        <input type="submit" value="Generate Resume" id="btn-gen">
                    </div>
                </div>
            </form>
        </div>
    </main>
    <footer id="main-footer">
        <div class="footings">
            <h4 class="footing-bg"><i>&copy; 2021, Charles King. All rights reserved.</i></h4>
        </div>
        <div class="navs">
            <ul class="nav-list">
                <li class="nav-item"><a href="#"><i class="fab fa-facebook fa-2x"></i></a></li>
                <li class="nav-item"><a href="#"><i class="fab fa-twitter fa-2x"></i></a></li>
                <li class="nav-item"><a href="#"><i class="fab fa-github fa-2x"></i></a></li>
                <li class="nav-item"><a href="#"><i class="fab fa-linkedin fa-2x"></i></a></li>
                <ul>
        </div>
    </footer>
    <script src="../../js/p4.js"></script>
</body>

</html>