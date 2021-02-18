<?php require_once('./partials/_partial4.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/serv/p4-form.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/icons/favicon-16x16.png">
    <link rel="manifest" href="../img/icons/site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>My Resume | KProfile</title>
</head>

<body>
    <main id="main-content">
        <div class="container">
            <div class="section personal-info">
                <h2 class="section-title">1. Personal Info</h2>
                <div class="data-container">
                    <div class="img-container">
                        <?php echo "<img src='$img_name' class='img'>" ?>
                    </div>
                    <div class="inputs">
                        <ul class="input-items">
                            <li class="input-list">
                                <div class="icon"><span class="input-label"><i class="fas fa-user-tag"></i></span></div>
                                <span class="data"><?php echo ucwords(getData($data, 'name'));  ?></span>
                            </li>
                            <li class="input-list">
                                <div class="icon"><span class="input-label"><i class="fas fa-phone-alt"></i></span></div>
                                <span class="data"><?php echo getData($data, 'landline');  ?></span>
                            </li>
                            <li class="input-list">
                                <div class="icon"><span class="input-label"><i class="fas fa-mobile-alt"></i></span></div>
                                <span class="data"><?php echo getData($data, 'mobile');  ?></span>
                            </li>
                            <li class="input-list">
                                <div class="icon"><span class="input-label"><i class="fas fa-map-marker-alt"></i></span></div>
                                <span class="data"><?php echo getData($data, 'address');  ?></span>
                            </li>
                            <li class="input-list">
                                <div class="icon"><span class="input-label"><i class="far fa-envelope"></i></span></div>
                                <span class="data"><?php echo getData($data, 'email');  ?></span>
                            </li>
                            <li class="input-list">
                                <div class="icon"><span class="input-label"><?php echo (getData($data, 'sex') === 'male') ?  '<i class="fas fa-mars"></i>' : '<i class="fas fa-venus"></i>' ?></span></div>
                                <span class="data"><?php echo ucfirst(getData($data, 'sex')); ?></span>
                            </li>
                            <li class="input-list">
                                <div class="icon"><span class="input-label"><i class="far fa-calendar-plus"></i></span></div>
                                <span class="data"><?php echo getData($data, 'dob');  ?></span>
                            </li>
                            <li class="input-list">
                                <div class="icon"><span class="input-label"><i class="fas fa-globe"></i></span></div>
                                <span class="data"><?php echo ucfirst(getData($data, 'nationality')); ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section objective-statement">
                <h2 class="section-title">2. Objective Statement</h2>
                <div class="data-container">
                    <div class="inputs">
                        <ul class="input-items">
                            <li class="input-list">
                                <table class="objective">
                                    <tr>
                                        <td><i class="fas fa-quote-left fa-2x"></i></td>
                                        <td class="quote"><?php echo ucfirst(getData($data, 'objective')) ?></td>
                                        <td><i class="fas fa-quote-right fa-2x"></i></td>
                                    </tr>
                                </table>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section educational-info">
                <h2 class="section-title">3. Educational Attainment</h2>
                <div class="data-container">
                    <div class="inputs">
                        <ul class="input-items">
                            <li class="input-list">
                                <span class="input-label">
                                    <div class="icon"><span class="input-label"><i class="fas fa-school"></i></span></div>Elementary Education
                                </span>
                                <hr>
                            </li>
                            <li class="input-list">
                                <div class="label-box-educ"><span class="input-label">School: </span></div>
                                <span class="data"><?php echo ucfirst(getData($data, 'elementary')); ?></span>

                            </li>
                            <li class="input-list">
                                <div class="label-box-educ"><span class="input-label">Address: </span></div>
                                <span class="data"><?php echo ucfirst(getData($data, 'e-address')); ?></span>

                            </li>
                            <li class="input-list">
                                <table class="date">
                                    <tr>
                                        <td>
                                            <div class="label-box-educ"><span class="input-label">From: </span></div>
                                        </td>
                                        <td><span class="data"><?php echo getData($data, 'e-from-date'); ?></span></td>
                                        <td>
                                            <div class="label-box-educ"><span class="input-label">To: </span></div>
                                        </td>
                                        <td> <span class="data"><?php echo getData($data, 'e-to-date'); ?></span>
                                        </td>
                                    </tr>
                                </table>
                            </li>

                            <?php if (getData($data, 'e-honors')) {
                                echo '<li class="input-list">
                                    <div class="label-box-educ"><span class="input-label">Honors: </span></div>
                                    <span class="data">' . ucfirst(getData($data, 'e-honors')) . '</span></li>';
                            } ?>
                        </ul>

                        <ul class="input-items">
                            <li class="input-list">
                                <span class="input-label">
                                    <div class="icon"><span class="input-label"><i class="fas fa-school"></i></span></div>Secondary Education
                                </span>
                                <hr>
                            </li>
                            <li class="input-list">
                                <div class="label-box-educ"><span class="input-label">School: </span></div>
                                <span class="data"><?php echo ucfirst(getData($data, 'secondary')); ?></span>

                            </li>
                            <li class="input-list">
                                <div class="label-box-educ"><span class="input-label">Address: </span></div>
                                <span class="data"><?php echo ucfirst(getData($data, 's-address')); ?></span>

                            </li>
                            <li class="input-list">
                                <table class="date">
                                    <tr>
                                        <td>
                                            <div class="label-box-educ"><span class="input-label">From: </span></div>
                                        </td>
                                        <td><span class="data"><?php echo getData($data, 's-from-date'); ?></span></td>
                                        <td>
                                            <div class="label-box-educ"><span class="input-label">To: </span></div>
                                        </td>
                                        <td> <span class="data"><?php echo getData($data, 's-to-date'); ?></span>
                                        </td>
                                    </tr>
                                </table>
                            </li>

                            <?php if (getData($data, 's-honors')) {
                                echo '<li class="input-list">
                                    <div class="label-box-educ"><span class="input-label">Honors: </span></div>
                                    <span class="data">' . ucfirst(getData($data, 's-honors')) . '</span></li>';
                            } ?>
                        </ul>

                        <ul class="input-items">
                            <li class="input-list">
                                <span class="input-label">
                                    <div class="icon"><span class="input-label"><i class="fas fa-graduation-cap"></i></span></div>Tertiary Education
                                </span>
                                <hr>
                            </li>
                            <li class="input-list">
                                <div class="label-box-educ"><span class="input-label">School: </span></div>
                                <span class="data"><?php echo ucfirst(getData($data, 'tertiary')); ?></span>

                            </li>
                            <li class="input-list">
                                <div class="label-box-educ"><span class="input-label">Address: </span></div>
                                <span class="data"><?php echo ucfirst(getData($data, 't-address')); ?></span>

                            </li>
                            <li class="input-list">
                                <table class="date">
                                    <tr>
                                        <td>
                                            <div class="label-box-educ"><span class="input-label">From: </span></div>
                                        </td>
                                        <td><span class="data"><?php echo getData($data, 't-from-date'); ?></span></td>
                                        <td>
                                            <div class="label-box-educ"><span class="input-label">To: </span></div>
                                        </td>
                                        <td> <span class="data"><?php echo getData($data, 't-to-date'); ?></span>
                                        </td>
                                    </tr>
                                </table>
                            </li>

                            <?php if (getData($data, 't-honors')) {
                                echo '<li class="input-list">
                                    <div class="label-box-educ"><span class="input-label">Honors: </span></div>
                                    <span class="data">' . ucfirst(getData($data, 't-honors')) . '</span></li>';
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section skills">
                <h2 class="section-title">4. Skills</h2>
                <div class="data-container">
                    <div class="inputs">
                        <table class="skills-table">
                            <? 
                                $skillPerc = (getData($data))
                            ?>
                            <tr>
                                <td>1</td>
                                <td><span class="input-label"><?php echo ucfirst(getData($data, 'skill1'));  ?></span></td>
                                <td>
                                    <div class="level"><?php echo '<div class="level-bar" style="width:' . getSkillPerc($data, 'skill1-rating') . '%;">
                                        <div class="level-underlay">' . ucfirst(getData($data, 'skill1-rating')) . '%</div>
                                    
                                    </div>'; ?></div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><span class="input-label"><?php echo ucfirst(getData($data, 'skill2'));  ?></span></td>
                                <td>
                                    <div class="level"><?php echo '<div class="level-bar" style="width:' . getSkillPerc($data, 'skill2-rating') . '%;">
                                        <div class="level-underlay">' . ucfirst(getData($data, 'skill2-rating')) . '%</div>
                                    
                                    </div>'; ?></div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><span class="input-label"><?php echo ucfirst(getData($data, 'skill3'));  ?></span></td>
                                <td>
                                    <div class="level"><?php echo '<div class="level-bar" style="width:' . getSkillPerc($data, 'skill3-rating') . '%;">
                                        <div class="level-underlay">' . ucfirst(getData($data, 'skill3-rating')) . '%</div>
                                    
                                    </div>'; ?></div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><span class="input-label"><?php echo ucfirst(getData($data, 'skill4'));  ?></span></td>
                                <td>
                                    <div class="level"><?php echo '<div class="level-bar" style="width:' . getSkillPerc($data, 'skill4-rating') . '%;">
                                        <div class="level-underlay">' . ucfirst(getData($data, 'skill4-rating')) . '%</div>
                                    
                                    </div>'; ?></div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><span class="input-label"><?php echo ucfirst(getData($data, 'skill5'));  ?></span></td>
                                <td>
                                    <div class="level"><?php echo '<div class="level-bar" style="width:' . getSkillPerc($data, 'skill5-rating') . '%;">
                                        <div class="level-underlay">' . ucfirst(getData($data, 'skill5-rating')) . '%</div>
                                    
                                    </div>'; ?></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="section affiliate">
                <h2 class="section-title">5. Affiliates</h2>
                <div class="data-container">
                    <div class="inputs">
                        <?php if (count($aff) < 1) {
                            echo '
                            <ul class="input-items">
                                <li class="input-list>
                                    <div class="label-box-aff"><span class="input-label" style="padding: 1rem;">N/A</span></div>
                                </li>
                           
                            <ul>
                            ';
                        } else {
                            foreach ($aff as $k => $d)
                                echo '
                            <ul class="input-items">
                            <li class="input-list">
                                <span class="input-label">
                                    <div class="icon"><span class="input-label"><i class="fab fa-affiliatetheme"></i></span></div>Affiliate ' . $k + 1 . '
                                </span>
                                <hr>
                            </li>
                            <li class="input-list">
                                <div class="label-box-aff"><span class="input-label">Affiliate Name: </span></div>
                                <span class="data">' . ucfirst(getData($data, "affiliate$d")) . '</span>

                            </li>
                            <li class="input-list">
                                <table class="date">
                                    <tr>
                                        <td>
                                            <div class="label-box-educ"><span class="input-label">From: </span></div>
                                        </td>
                                        <td><span class="data">' . getData($data, "aff$d-from-date") . '</span></td>
                                        <td>
                                            <div class="label-box-educ"><span class="input-label">To: </span></div>
                                        </td>
                                        <td> <span class="data">' . getData($data, "aff$d-to-date") . '</span>
                                        </td>
                                    </tr>
                                </table>
                            </li>

                        </ul>
                            ';
                        } ?>

                    </div>
                </div>

                <div class="section work-container">
                    <h2 class="section-title">6. Work Experience</h2>
                    <div class="data-container">
                        <div class="inputs">
                            <?php if (count($work) < 1) {
                                echo '
                                <ul class="input-items">
                                    <li class="input-list>
                                        <div class="label-box-aff"><span class="input-label" style="padding: 1rem;">N/A</span></div>
                                    </li>
                               
                                <ul>
                                ';
                            } else {
                                foreach ($work as $k => $d)
                                    echo '
                            <ul class="input-items">
                            <li class="input-list">
                                <span class="input-label">
                                    <div class="icon"><span class="input-label"><i class="fas fa-briefcase"></i></span></div>Job ' . $k + 1 . '
                                </span>
                                <hr>
                            </li>
                            <li class="input-list">
                                <div class="label-box-aff"><span class="input-label">Job Name: </span></div>
                                <span class="data">' . ucfirst(getData($data, "work$d")) . '</span>

                            </li>
                            <li class="input-list">
                                <div class="label-box-aff"><span class="input-label">Job Position: </span></div>
                                <span class="data">' . ucfirst(getData($data, "w$d-pos")) . '</span>

                             </li>
                             <li class="input-list">
                                <div class="label-box-aff"><span class="input-label">Work Address: </span></div>
                                <span class="data">' . ucfirst(getData($data, "w$d-address")) . '</span>

                             </li>
                            <li class="input-list">
                                <table class="date">
                                    <tr>
                                        <td>
                                            <div class="label-box-educ"><span class="input-label">From: </span></div>
                                        </td>
                                        <td><span class="data">' . getData($data, "w$d-from-date") . '</span></td>
                                        <td>
                                            <div class="label-box-educ"><span class="input-label">To: </span></div>
                                        </td>
                                        <td> <span class="data">' . getData($data, "w$d-to-date") . '</span>
                                        </td>
                                    </tr>
                                </table>
                            </li>

                        </ul>
                            ';
                            }  ?>

                        </div>
                    </div>
                </div>
            </div>
    </main>
</body>

</html>