<div class="panel panel-default">
    <?php
        if ($signed) {
            echo
            '<div class="panel-heading">
                <table>
                    <tr>
                        <td id="print-title">Please print or save this form for your records</td>
                        <td>
                            <div id="continuebutton" class="text-right">
                                <a href="articles.php">
                                    <button type="submit" class="btn btn-default small">Continue</button>
                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>';
        }
    ?>
    <div id="consent" class="panel-body">
        <h4 class="text-center">UNIVERSITY OF WASHINGTON CONSENT FORM:</h4>
        <h4 class="text-center">PERCEIVED VERACITY EXPERIMENT </h4>
        <br>
        <h4>RESEARCHERS:</h4>
        <ul>
            <li>Anya Hsu, researcher -- call or text at (650) 532-9041</li>
            <li>Marijn Burger, researcher</li>
            <li>Michael Magee, researcher</li>
            <li>Jacob Wobbrock, faculty advisor</li>
        </ul>
        <br>
        <h4 class="text-center">RESEARCHER’S STATEMENT</h4>
        <p>
            We are asking you to be in a research study.  The purpose of this consent form is to give you the information you will need to help you decide whether to be in the study or not.  Please read the form carefully.  You may ask questions about the purpose of the research, what we would ask you to do, the possible risks and benefits, your rights as a volunteer, and anything else about the research or this form that is not clear.  When we have answered all your questions, you can decide if you want to be in the study or not.  This process is called “informed consent.”  We will give you a copy of this form for your records.
        </p>
        <br>
        <h4 class="text-center">PURPOSE OF THE STUDY</h4>
        <p>
            We are conducting an experiment to investigate the effect visual presentation has on readers’ perceived veracity, specifically in unfamiliar news sources. Our study will research different combinations of visual presentation elements in news articles such as font size, presence of images, and so on, to determine how the presence (or lack thereof) of these elements change readers’ opinions of the news article.
        </p>
        <br>
        <h4 class="text-center">STUDY PROCEDURES</h4>
        <p>
            In this study, we will be asking you to rate different mock-ups of news articles on how credible you feel they are. The study will be done both with a proctor, as well as self-administered. While we expect the entire process to take approximately 30 minutes, we encourage you to take as much time as you need to provide responses.
            <br><br>We will show you (24?) different mock-ups, and ask you to rate each one. You will also have the ability to mark a “thumbs up” or “thumbs down” on (each article/different aspects of the article) if you felt strongly about the reason for the rating you provided. We expect this portion to take around (15) minutes, but again, you are encouraged to take as much time as necessary.
            <br><br>After completing the rating portion, you will be asked to elaborate on the pages you marked with a “thumbs up” or “thumbs down.” If you are taking the self-administered version of the experiment, you will be able to enter a written response providing more extensive feedback on what made you rate the site the way you did. If you are taking a proctored version, a researcher will conduct a follow-up interview where you can verbally elaborate on your responses. You are free to refuse to answer any question. We expect this portion to take approximately (15) minutes.
        </p>
        <br>
        <h4 class="text-center">RISKS, STRESS, OR DISCOMFORT</h4>
        <p>
            Our study is not concerned with particularly controversial information. There are no foreseeable risks of harm greater than those experienced in daily life. The email addresses we collect from subjects for the drawing will be stored in a secure database, in no way linked to experiment response data.
        </p>
        <br>
        <h4 class="text-center">BENEFITS OF THE STUDY</h4>
        <p>
            While individual subjects are unlikely to experience notable benefits as a result of participation, they are contributing to the body of knowledge about how college-enrolled students evaluate the credibility of news sources.
        </p>
        <br>
        <h4 class="text-center">CONFIDENTIALITY OF RESEARCH INFORMATION</h4>
        <p>
            Our data will be anonymous, as no data collected from our study will be linked to any personally identifying information. Email addresses provided for the drawing will be kept in a separate database from gender, age, and experiment data, with no link between the datasets.
        </p>
        <br>
        <h4 class="text-center">OTHER INFORMATION</h4>
        <p>
            You may refuse to participate and you are free to withdraw from this study at any time, however you are only eligible for the $50 Amazon Gift Card drawing if you complete the entire study.
        </p>
        <br>
        <h4 class="text-center">RESEARCH-RELATED INJURY</h4>
        <p>
            If you think you have a medical problem or illness related to this research, contact Anya Hsu at anyahsu@uw.edu right away. She will refer you for treatment.
        </p>
        <br>
        <h4 class="text-center">SUBJECT’S STATEMENT</h4>
        <p>
            This study has been explained to me.  I volunteer to take part in this research.  I have had a chance to ask questions.  If I have questions later about the research, or if I have been harmed by participating in this study, I can contact one of the researchers listed on the first page of this consent form.  If I have questions about my rights as a research subject, I can call the Human Subjects Division at (206) 543-0098 or call collect at (206) 221-5940. I will receive a copy of this consent form.
        </p>
        <?php
            if ($signed) {
                echo
                '<label class="checkbox-inline" >
                    <input type="checkbox" name="give-consent" disabled="true" checked="true" value="give-consent">
                    I give my consent to participate in this study. <span id="signed-date">(' . date('m/y/d') . ')</span>
                </label>
                <br><br>';
            }
        ?>
        <p>
            Copies to: Researcher, Subject
        </p>
    </div>
</div>
