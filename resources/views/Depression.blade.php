<!DOCTYPE html>
<html>
<title>VUY</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Depression.css">
    <link rel="stylesheet" href="css/index.css">

    
<body>
<nav>
                <div class="menu-icon">
                    <i class="fa fa-bars fa-2x"></i>
                </div>
                <div class="logo">
                VUY                </div>
                <div class="menu">
                    <ul>
                        <li><a href="{{ url('/doctor') }}">Our Doctor</a></li>
                        <li><a href="{{ url('/eva') }}">Evaluation</a></li>
                        <li><a href="{{ url('/info') }}">Information</a></li>
                        @if (Route::has('login'))
                    @auth
                    <li><a href="{{ url('/diary') }}">Diary</a></li>
    
                    <li><a href="{{ url('/chats/5') }}">Talk with Doc</a></li>
                        <li>  <a  href="{{ url('/home') }}">{{ Auth::user()->name }}</a></li>

                       <li> <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                                    </ul>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                    @else
                        <li><a  href="{{ route('login') }}">Login</a></li>
                    @endauth
            @endif

                </div>

                <script>
                    $(document).ready(function () {
                        $(".menu-icon").on("click", function () {
                            $("nav ul").toggleClass("showing");
                        });
                    });

                    // Scrolling Effect

                    $(window).on("scroll", function () {
                        if ($(window).scrollTop()) {
                            $('nav').addClass('black');
                        } else {
                            $('nav').removeClass('black');
                        }
                    })

                </script>
            </nav>
    <!-- start banner Area -->
    
	<section class="banner-area relative about-banner" id="home">	
        
        <div class="overlay overlay-bg"></div>
        
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <br><br><br><br><br><br><br><br><br><br>
                    </div>	
                </div>
            </div>
    </section>
    <!-- End banner Area -->
    	
    <div style="padding: 20px 35px 20px 13.5%; ">
            <div class="button-group-area"  >
                <a href="#what-is-depression?" class="genric-btn yellow e-large">What is Depression?</a>
                <a href="#Type-of-depression" class="genric-btn green e-large">Type of depression</a>
                <a href="#Signs-and-symptoms" class="genric-btn orange e-large">Signs and symptoms</a>
                <a href="#The-causes-of-Depression" class="genric-btn red e-large">The causes of Depression</a>
                <a href="#Diagnosis-of-depression" class="genric-btn green e-large">Diagnosis of depression</a>
                <a href="#How-to-dealing-with-depression" class="genric-btn red e-large">How to dealing with depression</a>
                <a href="#Prevention-of-depression" class="genric-btn yellow e-large">Prevention of depression</a>
            </div>
    </div>
    
    <!-- Start Info Area -->
    <section class="sample-text-area">
        <div class="container" id="what-is-depression?">
            <hr style="background-color: #f2c84b;"> 
            <br>
            <h1 class="text-heading"><b>Depression</b> </h1>
            <div class="sample-text">
                <img src="http://www.helpforld.com/wp-content/uploads/2016/09/depression.jpg" style="width: 40%; float: left;padding-top: -60% ">
                <div class="section-top-border">
					<div class="row">
						<div class="col-lg-12">
							<blockquote class="generic-blockquote-yellow"><br> Depression is the main cause of disability in the world. Almost everyone feels reduced occasionally. Receiving bad grades, losing jobs, having an argument, even the rainy day can cause sad feelings. Sometimes there are no triggers. It appeared from the blue. Then the situation changed and those sad feelings disappeared.
                            <br><br>
                            Clinical depression symptoms vary It is a medical disorder and it will not disappear just because you need it. It lasts for at least two consecutive weeks and interferes with your ability to work, play or love.<br></blockquote>
                        </div>
					</div>
				</div>
                
                <p>Depression can have many different symptoms:</p>
                <img src="images/dog.jpg" style="float: right; padding-right:15%; width: 55%">
                <ul>
                    <li>Low mood</li>
                    <li>Losing interest in what you normally like</li>
                    <li>Changes in appetite</li>
                    <li>Feel worthless</li>
                    <li>Too many mistakes</li>
                    <li>Too much or too little sleep</li>
                    <li>Low concentration</li>                        
                    <li>Restless or slow</li>
                    <li>Energy loss</li>
                    <li>Repetitive thoughts of suicide</li>
                </ul>
                <br>
                <p>If you have at least five of these symptoms according to the psychiatric guidelines, you are eligible for a diagnosis of depression. And it's not just behavioral symptoms Depression has physical symptoms within the brain. </p>
                <p>First of all, there are changes that can be seen with the naked eye and these X-ray vision includes a small front projection and a hippocampal volume in the subject of microscopy. </p>                    <p>Depression involves something: </p>
                <ul>
                    <li>abnormal transmission or Loss of certain neurotransmitters, especially serotonin, norepinephrine and dopamine</li>
                    <li>dull stroke</li>
                    <li>specific changes in REM</li>
                    <li>slow waves of disorders of the hormone cortisol, such as high cholesterol and thyroid hormones control.</li>                    
                </ul>
                <br>
                <p>But neurologists do not have an overview of what causes depression.</p>
                <p>It seems to be related to the complex interaction between genes and the environment. but we do not have a diagnostic tool that can accurately predict where or when to appear and because the depressive symptoms do not exist, it is difficult to know who may look good but truly struggling. </p>
                <br>
                <p>According to the National Institute of Mental Health, spending an average of ten years suffering from mental illness for help but there are many effective treatments drugs and other complementary therapies to increase brain chemicals.</p>
                
                <img src="images/dogg.jpg" style="float: left; width: 35%">
                <p>In extreme cases - electrical therapy, which is like a control seizure in the patient's brain, is also helpful.</p>                                 
                <br>                
                <p>Other promising treatments such as transcranial magnetic stimulation are also being investigated.</p>
                <br>
                <p>For those with depression, these first steps may seem insurmountable. If they feel guilty or ashamed, point out that depression is a medical condition such as asthma or diabetes. Not a weakness or personality trait, and they should not expect to receive more than they can overcome the broken arm. If you have never had depression, avoid comparing it with the time you feel bad. When comparing what they experience with normal feelings of sadness can temporarily make them feel guilty of struggling. Even speaking of openly depression can help.</p>
                <p>For example, research shows that asking someone about suicidal thoughts reduces the risk of suicide. Open conversation about mental illness will help reduce shame and make people easier to ask for help. The more patients treated, the more scientists will learn about depression and the better the treatment will be.</p>
            </div>
        </div> 
        <br>
        <div class="container" id="Type-of-depression">
                <hr style="background-color: #c8d948;">
                <br>
                <h1 class="text-heading"><b>Type of depression</b> </h1>
                <div class="sample-text">
                        <div class="section-top-border">
                            <div class="row">
                                <div class="col-lg-12">
                                    <blockquote class="generic-blockquote-green"><br> It’s important for doctors to know which type of depression you have, so they can prescribe the most effective treatments. There are nine types of depression. Each type of depression has different symptoms and causes. This section describes about the various types of depression.
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    <p style="font-size: 18px"><b>The Nine Types of Depression</b></p> 
                    <ol>
                        <b><li> Major Depressive Disorder</li></b>
                        <p>&emsp;&emsp;When someone experiences persistent and deep feelings of sadness for at least two weeks, then they may have a major depressive disorder (also referred to as “clinical depression”). Common symptoms of this type of depression include a change in appetite (overeating/undereating), change in sleep schedule (insomnia/excessive sleep), excessive crying, inability to concentrate, and of course, intense feelings of sadness.</p>
                        <b><li> Persistent Depressive Disorder</li></b>
                        <p>&emsp;&emsp;Also known as “dysthymia,” persistent depressive disorder is a type of chronic depression that can be difficult to diagnose. Dysthymia symptoms are not as severe as with major depressive disorder. If you have a pervasive, low-level depression that lasts for two years or longer, you may have a persistent depressive disorder.</p>
                        <b><li> Seasonal Affective Disorder</li></b>
                        <p>&emsp;&emsp;People with the seasonal affective disorder experience the classic signs of depression at the same time every year. Most people with SAD feel symptoms come on in the fall and continue through the winter months. Symptoms include fatigue, sadness and social isolation. Light therapy (also known as phototherapy treatment) can help alleviate this type of depression.</p>
                        <b><li> Bipolar Disorder</li></b>
                        <p>&emsp;&emsp;This used to be more commonly referred to as “manic-depressive illness.” Someone suffering from bipolar disorder experiences unusual and large shifts in mood and energy levels. They cycle through manic and depressive periods; in a manic episode, they may have lots of energy, experience racing thoughts and engage in risky behaviors such as having reckless sex. In a depressive episode, they will experience the classic symptoms of depression, including feeling sad and hopeless and having little energy for daily activities.</p>
                        <b><li> Psychotic Depression</li></b>
                        <p>&emsp;&emsp;Also known as “major depressive disorder with psychotic features,” this is a form of major depressive disorder accompanied by psychotic symptoms. Someone with psychotic depression experiences the same feelings of sadness and hopelessness found in major depression as well as delusions and hallucinations.</p>
                        <b><li> Postpartum Depression</li></b>
                        <p>&emsp;&emsp;This isn’t the “baby blues” (mood swings, crying spells) that many women have in the two weeks after giving birth — postpartum depression is a more severe, long-lasting form of depression. In addition to experiencing the symptoms of major depression, women with postpartum depression may have trouble bonding with their baby or doubt their ability to care for it. They may also think about harming themselves or their baby.</p>
                        <b><li> Premenstrual Dysphoric Disorder</li></b>
                        <p>&emsp;&emsp;This is a severe form of premenstrual syndrome. All the common PMS symptoms may be present along with extreme sadness, irritability or anger. The symptoms of PMDD almost always resolve with the onset of menstruation.</p>
                        <b><li> Situational Depression</li></b>
                        <p>&emsp;&emsp;This is a short-term form of depression that comes about following a traumatic event — loss of a loved one, job loss, divorce, etc. Also referred to as “adjustment disorder,” someone suffering from situational depression will feel sad, afraid or hopeless. As you adjust to your new normal, situational depression usually goes away.</p>
                        <b><li> Atypical Depression</li></b>
                        <p>&emsp;&emsp;Atypical depression can occur in people with major depression or persistent depression. It’s a subtype of these types of depression marked by several specific symptoms, including increased appetite/weight gain, fatigue, moods that temporarily lift in reaction to good news, extremely sensitivity to rejection and headaches.</p>
                        <br>
                        <img src="https://themighty.com/wp-content/uploads/2017/09/xThinkstockPhotos-826154692-1-640x213.jpg,qv=1506442473.pagespeed.ic.Oeds5hYOdh.jpg" style="margin: auto;display: block; width: 65%;">
                    </ol>
                </div>
        </div>
        <br>
        <div class="container" id="Signs-and-symptoms">
                <hr style="background-color: #f2c84b;">
                <h1 class="text-heading"><b>Signs and symptoms</b> </h1>
                <div class="sample-text">
                    <div class="section-top-border">
                            <div class="row">
                                <div class="col-lg-12">
                                    <blockquote class="generic-blockquote-orange"><br> Major depression significantly affects a person's family and personal relationships, work or school life, sleeping and eating habits, and general health. Its impact on functioning and well-being has been compared to that of other chronic medical conditions, such as diabetes.</blockquote>
                                </div>
                        </div>
                    </div>    
                    <p>A person having a major depressive episode usually exhibits a very low mood, which pervades all aspects of life, and an inability to experience pleasure in activities that were formerly enjoyed. Depressed people may be preoccupied with, or ruminate over, thoughts and feelings of worthlessness, inappropriate guilt or regret, helplessness, hopelessness, and self-hatred. In severe cases, depressed people may have symptoms of psychosis. These symptoms include delusions or, less commonly, hallucinations, usually unpleasant. Other symptoms of depression include poor concentration and memory (especially in those with melancholic or psychotic features), withdrawal from social situations and activities, reduced sex drive, irritability, and thoughts of death or suicide. Insomnia is common among the depressed. In the typical pattern, a person wakes very early and cannot get back to sleep. Hypersomnia, or oversleeping, can also happen. Some antidepressants may also cause insomnia due to their stimulating effect.</p>
                    <center><img src="https://www.homeinstead.ie/images/default-source/kildare-gallery-images/rsz_bigstock-depression-conceptual-design-34547042_1.jpg?sfvrsn=0"></center>
                    <br>
                    <p>A depressed person may report multiple physical symptoms such as fatigue, headaches, or digestive problems; physical complaints are the most common presenting problem in developing countries, according to the World Health Organization's criteria for depression. Appetite often decreases, with resulting weight loss, although increased appetite and weight gain occasionally occur. Family and friends may notice that the person's behavior is either agitated or lethargic. Older depressed people may have cognitive symptoms of recent onset, such as forgetfulness, and a more noticeable slowing of movements. Depression often coexists with physical disorders common among the elderly, such as stroke, other cardiovascular diseases, Parkinson's disease, and chronic obstructive pulmonary disease.</p>
                    <br>
                    <p>Depressed children may often display an irritable mood rather than a depressed one, and show varying symptoms depending on age and situation. Most lose interest in school and show a decline in academic performance. They may be described as clingy, demanding, dependent, or insecure. Diagnosis may be delayed or missed when symptoms are interpreted as "normal moodiness".</p>
                </div>
        </div>
        <br>
        <div class="container" id="The-causes-of-Depression">
                <hr style="background-color: #f26b6b;">
                <h1 class="text-heading"><b>The causes of Depression</b> </h1>
                <center><img src="https://216teens.org/wp-content/uploads/2016/11/what-causes-depression-01-01.png" style="width: 40%; padding-bottom: 15px;"></center>
                <div class="sample-text">
                        <div class="section-top-border">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <blockquote class="generic-blockquote-red"><br><i> "The cause of major depressive disorder is unknown."</i></blockquote>
                                    </div>
                            </div>
                        </div>
                    <p>The biopsychosocial model proposes that biological, psychological, and social factors all play a role in causing depression. </p>
                    <p>The diathesis–stress model specifies that depression results when a pre existing vulnerability, or diathesis, is activated by stressful life events. The preexisting vulnerability can be either genetic, implying an interaction between nature and nurture, or schematic, resulting from views of the world learned in childhood.</p>
                    <br>
                    <p>Childhood abuse, either physical, sexual or psychological, are all risk factors for depression, among other psychiatric issues that co-occur such as anxiety and drug abuse. Childhood trauma also correlates with severity of depression, lack of response to treatment and length of illness. However, some are more susceptible to developing mental illness such as depression after trauma, and various genes have been suggested to control susceptibility.</p>
                    <br>
                    <p>Depression may also come secondary to a chronic or terminal medical condition, such as HIV/AIDS or asthma, and may be labeled "secondary depression." It is unknown whether the underlying diseases induce depression through effect on quality of life, of through shared etiologies (such as degeneration of the basal ganglia in Parkinson's disease or immune dysregulation in asthma).</p>
                    <br>
                    <p>Therapies associated with depression</p>
                    <ul>
                        <li>interferons
                        <li>beta-blockers</li>
                        <li>isotretinoin</li>
                        <li>contraceptives</li> 
                        <li>cardiac agents</li>
                        <li>anticonvulsants</li>
                        <li>antimigraine drugs</li>
                        <li>antipsychotics</li>    
                        <li>hormonal agents such as gonadotropin-releasing hormone agonist</li>   
                        <br>
                        <p>Drug abuse in early age is also associated with increased risk of developing depression later in life.</p>  
                        <br>
                        <p>Depression that occurs as a result of pregnancy is called postpartum depression, and is thought to be the result of hormonal changes associated with pregnancy.</p>                      
                        <br>
                        <p>Seasonal affective disorder, a type of depression associated with seasonal changes in sunlight, is thought to be the result of decreased sunlight</p>
                    </ul>
                </div>
        </div>
        <br>
        <div class="container" id="Diagnosis-of-depression">
                <hr style="background-color: #c8d948;">
                <h1 class="text-heading"><b>Diagnosis of depression</b> </h1>
                <div class="sample-text">
                    <p>A diagnostic assessment may be conducted by a suitably trained general practitioner, or by a psychiatrist or psychologist, who records the person's current circumstances, biographical history, current symptoms, and family history. </p>
                    <br>
                    <p>The broad clinical aim is to formulate the relevant biological, psychological, and social factors that may be impacting on the individual's mood. The assessor may also discuss the person's current ways of regulating mood (healthy or otherwise) such as alcohol and drug use.</p>
                    <br>
                    <p>The assessment also includes a mental state examination, which is an assessment of the person's current mood and thought content, in particular the presence of themes of</p>
                    <ul>
                        <li>hopelessness or pessimism</li>
                        <li>self-harm or suicide</li>
                        <li>an absence of positive thoughts or plans</li>         
                    </ul>
                    <br>
                    <p>Before diagnosing a major depressive disorder, in general a doctor performs a medical examination and selected investigations to rule out other causes of symptoms. These include blood tests measuring TSH and thyroxine to exclude hypothyroidism; basic electrolytes and serum calcium to rule out a metabolic disturbance; and a full blood count including ESR to rule out a systemic infection or chronic disease.Testosterone levels may be evaluated to diagnose hypogonadism, a cause of depression in men. Vitamin D levels might be evaluated, as low levels of vitamin D have been associated with greater risk for depression.</p>
                </div>
        </div>
        <br>
        <div class="container" id="How-to-dealing-with-depression">
                <hr style="background-color: #f26b6b;">
                <h1 class="text-heading"><b>How to dealing with depression</b> </h1>
                <div class="sample-text">
                    <p>The three most common treatments for depression are</p>
                    <ol>
                        <b><li>Psychotherapy</li></b>
                        <p>&emsp;&emsp;Psychotherapy is the treatment of choice (over medication) for people under 18, and It can be delivered to individuals, groups, or families by mental health professionals. Psychotherapy BETTER THAN NO TREATMENT. Work-directed interventions combined with clinical interventions helped to reduce sick days taken by people with depression.</p>
                        <p>&emsp;&emsp;There is moderate-quality evidence that psychological therapies are a useful addition to standard antidepressant treatment of treatment-resistant depression in the short term.</p>
                        <img src="http://www.gbcmpk.org/home/180008954/180008954/Images/Depression.gif" style="width: 25%;float:right; padding-right: 8%;padding-top: -5%;">
                        <p>&emsp;&emsp;Antidepressants treatment in combination with psychosocial interventions should be considered for:</p>
                        <ul>
                            <li>People with a history of moderate or severe depression</li>
                            <li>Those with mild depression that has been present for a long period</li>
                            <li>As a second line treatment for mild depression that persists after other interventions</li>
                            <li>As a first line treatment for moderate or severe depression</li>	            
                        </ul>
                        <p>&emsp;&emsp;should be continued for at least six months to reduce the risk of relapse.</p>
                        <p>&emsp;&emsp;Successful psychotherapy appears to reduce the recurrence of depression even after it has been terminated or replaced by occasional booster sessions.</p>
                        <b><li>Medication</li></b> 
                        <p>&emsp;&emsp;The UK National Institute for Health and Care Excellence (NICE) guidelines indicate that antidepressants should not be used for the initial treatment of mild depression, because the risk-benefit ratio is poor.</p>
                        <b><li>Electroconvulsive therapy (ECT)</li></b>  
                        <p>&emsp;&emsp;Electroconvulsive therapy is a standard psychiatric treatment in which seizures are electrically induced in patients to provide relief from psychiatric illnesses. ECT is used with informed consent as a last line of intervention for major depressive disorder.</p>                     
                    </ol>
                    <div class="row">
                        <div class="col-lg-12">
                            <blockquote class="generic-blockquote-red">
                                <br><img src="bannern.png" style="width: 100%"><br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <blockquote class="generic-blockquote-red-s">
                                            <p>Physical exercise is recommended for management of mild depression, and has a moderate effect on symptoms.</p>
                                        </blockquote>
                                    </div>                                    
                                    
                                </div>
                                <p>Exercise has also been found to be effective for (unipolar) major depression. It is equivalent to the use of psychological therapies or medications in most people.In older people it does appear to decrease depression.<br>Exercise may be recommended to people who are willing, motivated, and physically healthy enough to participate in an exercise program as treatment.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
        </div>
        <div class="container" id="Prevention-of-depression">
                <hr style="background-color: #f2c84b;">
                <h1 class="text-heading"><b>Prevention of depression</b> </h1>
                <div class="sample-text">
                        <div class="section-top-border">
                            <div class="row">
                                <div class="col-lg-12">
                                    <blockquote class="generic-blockquote-yellow"><br><p>Behavioral interventions:</p>
                                        <ul>
                                            <li>interpersonal therapy</li>
                                            <li>cognitive-behavioral therapy</li>           
                                        </ul>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    
                    <p>are effective at preventing new onset depression because such interventions appear to be most effective when delivered to individuals or small groups, it has been suggested that they may be able to reach their large target audience most efficiently through the Internet.</p>
                    <center><img src="http://images.huffingtonpost.com/2014-08-14-Nevernevernevergiveup.Winston.png" style="width: 30%"></center><br>
                    <p>The Netherlands mental health care system provides preventive interventions, such as the "Coping with Depression" course (CWD) for people with subthreshold depression. The course is claimed to be the most successful of psychoeducational interventions for the treatment and prevention of depression (both for its adaptability to various populations and its results), with a risk reduction of 38% in major depression and an efficacy as a treatment comparing favorably to other psychotherapies.</p>
                    <br> <hr style="background-color: #f2c84b;">
                </div>
        </div>
        <center><div class="button-group-area mt-10">
            <a href="#" class="genric-btn warning-border circle">Go up</a>
        </div></center>
    </section>

    <!-- End Info Area -->
</body>
</html>