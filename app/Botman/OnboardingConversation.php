<?php

namespace App\Botman;


use Validator;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use Illuminate\Support\Str;
use BotMan\BotMan\Messages\Incoming\Answer;

class OnboardingConversation extends Conversation
{
    protected $name;

    protected $email;

    // protected $query;

    public function askName()
    {
        $this->ask('What do you want me to call you?', function (Answer $answer) {
            $this->bot->userStorage()->save([
                'name' => $answer->getText(),
            ]);

            $this->say('Hi, ' . $answer->getText() . '! It’s nice to meet you!');
            $this->aReminder();
        });
    }

    public function aReminder()
    {
        $this->ask('Before we continue, please keep in mind that:<br>
                1.You are talking to a bot and not a human being.<br>
                2.No human is monitoring the chat.<br>
                3.This is a safe place to vent your emotions.<br>
                4.Your privacy matters. <br>
                5.Whatever information you put in will not be saved in our database. ', function (Answer $answer) {

            $this->say('Great!');
            $this->askIfallright();
        });
    }

    public function askIfallright()
    {
        $this->ask('How are things right now? Is everything all right? [Yes/No]', function (Answer $answer) {
            $this->fellings = $answer->getText();
            $this->say($this->fellings);
            if ($answer->getText() === 'yes') {
                $this->answerYes();
            } else {
                $this->askTotalk();
            }
        });
    }

    public function answerYes()
    {
        $this->ask('Are you sure?[Yes/No]', function (Answer $answer) {
            $this->fellingschoice = $answer->getText();
            $this->say($this->fellingschoice);
            if ($answer->getText() === 'yes') {
                $this->answerGood();
            } else {
                $this->askIfallright();
            }
        });
    }

    public function answerGood()
    {
        $this->say("That's good to hear!");

        $this->ask('Do you want to start a new conversation?[Yes/No]', function (Answer $answer) {
            $this->newstart = $answer->getText();
            $this->say($this->newstart);
            if ($answer->getText() === 'yes') {
                $this->askName();
            } else {
                $this->endconvo();
            }
        });
    }

    public function askTotalk()
    {
        $this->ask('Do you want to talk about it with me?[Yes/No]', function (Answer $answer) {
            $this->askTotalk = $answer->getText();
            $this->say($this->askTotalk);
            if ($answer->getText() === 'yes') {
                $this->yesTalk();
            } else {
                $this->noTalk();
            }
        });
    }


    public function noTalk()
    {
        $this->ask('Do you want to talk to someone real?[Yes/No]', function (Answer $answer) {
            $this->noTalk = $answer->getText();
            $this->say($this->noTalk);
            if ($answer->getText() === 'yes') {
                $this->realTalk();
            } else {
                $this->sorry();
            }
        });
    }

    public function realTalk()
    {
        $question = Question::create('Okay. You are very brave to get help. Good job! Do you want to talk to someone now or do you want to talk set a schedule?')
            ->callbackId('select_talk')
            ->addButtons([
                Button::create('Hotlines')->value('0917 558 4673'),
                Button::create('list of hotlines')->value('0966-351-4518/0917-899-8727/0908-639-2672'),
                Button::create('Book Now')->value('<a href="https://activehelp.site/#doctor-chat" target="_blank"><button class="btn" >Booking Page</button></a><br>'),
                Button::create('List of Psychiaitris')->value('<a href="https://activehelp.site/#doctor-chat" target="_blank"><button class="btn" >Booking Page</button></a><br>'),

            ]);

        $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $this->bot->userStorage()->save([
                    'realtalkans' => $answer->getValue(),
                ]);

                $this->say($answer->getText());
            }

            $this->endconvo();
        });
    }

    public function yesTalk()
    {
        $this->ask('Sure. You can vent out here this is a safe place.<br>
        If you feel the following type the correspond key word. <br>
        1. Depressed <br>
        2. Mad <br>
        3. Sad <br>
        4. Suicide <br>
        5. Kill <br>
        ', function (Answer $answer) {
            $this->bot->userStorage()->save([
                'yestalkanswer' => $answer->getText(),
            ]);
            $this->yesTalk = $answer->getText();
            $this->say($this->yesTalk);
            if ($answer->getText() === 'Depressed' || $answer->getText() === 'depressed') {
                $this->depressed();
            }
            if ($answer->getText() === 'Sad' || $answer->getText() === 'sad') {
                $this->sad();
            }
            if ($answer->getText() === 'Mad' || $answer->getText() === 'mad') {
                $this->mad();
            }
            if (
                $answer->getText() === 'Kill' || $answer->getText() === 'kill' ||
                $answer->getText() === 'Suicide' || $answer->getText() === 'suicide'
            ) {
                $this->suicide();
            }
        });
    }

    public function depressed()
    {
        $this->ask(' Your feelings are valid. You are not alone. Feeling depressed is more normal than you think. I know you feel isolated, like you feel like you are underwater or you cannot breath. I promise you, you will overcome it. There are times when you think you might never feel better but trust me you will feel better. It may seem easy to give up but please do not give up. ', function (Answer $answer) {
        });
        $this->askTotalk();
    }

    public function sad()
    {
        $this->ask(' Feeling sad is okay, do not worry. The great thing about feeling sad is that it goes away. You can watch wholesome videos on Facebook, Instagram, Youtube or Tiktok. You can read funny stories. You can listen to music. There are many ways to make the sad feelings go away. Even if sometimes, the sadness does not go away quickly, it will even if it takes a little longer than you expected. ', function (Answer $answer) {
        });
        $this->askTotalk();
    }

    public function suicide()
    {
        $this->ask(' It may seem like doing that is the only way you can escape. You might be thinking, "How can I be in pain when I am gone? How can I be lonely when I am gone? Please remember that if you succesfully do it, you rob yourself of the chance of things getting better. You may believe that thing will never get better but you cannot see the future. There is still hope that things will get better. Keep holding on, you are stronger than you think. ', function (Answer $answer) {
        });
        $this->askTotalk();
    }

    public function mad()
    {
        $this->ask(' It is understandable that you feel mad. Try to breath in and out. If that does not work, you can try shouting or punching your pillow. You can also eat or drink something nice. Funny videos and photos could help too. ', function (Answer $answer) {
        });
        $this->askTotalk();
    }
    public function yesTalkcontinue()
    {
        $this->ask(' Do you want to continue talking about it?[yes/no]', function (Answer $answer) {
            $this->yestalkconitinue = $answer->getText();
            $this->say($this->yestalkconitinue);
            if ($answer->getText() === 'yes') {
                $this->yesTalkcontinueans();
            } else {
                $this->knowexperience();
            }
        });
    }

    public function yesTalkcontinueans()
    {
        $this->ask('Dont worry. You can talk to me. just let it all out', function (Answer $answer) {
            $this->bot->userStorage()->save([
                'yestalkcontinueans' => $answer->getText(),
            ]);

            $this->yesTalkcontinueansquestion();
        });
    }

    public function yesTalkcontinueansquestion()
    {
        $this->ask(' Do you want to do some breathing exercises with me?[yes/no]', function (Answer $answer) {
            $this->yestalkconitinue = $answer->getText();
            $this->say($this->yestalkconitinue);
            if ($answer->getText() === 'yes') {
                $this->yesTalkcontinueansquestionans();
            } else {
                $this->ventquestion();
            }
        });
    }

    public function yesTalkcontinueansquestionans()
    {
        $this->ask('We will be doing the 6-7-8 breath. Are you ready?[yes/no]', function (Answer $answer) {
            $this->yestalkconitinue = $answer->getText();
            $this->say($this->yestalkconitinue);
            if ($answer->getText() === 'yes') {
                $this->yesTalkcontinueansquestionans1();
            } else {
                $this->noTalkcontinueansquestionans();
            }
        });
    }

    public function noTalkcontinueansquestionans()
    {
        $this->ask(' Are you ready?[yes/no]', function (Answer $answer) {
            $this->yestalkconitinue = $answer->getText();
            $this->say($this->yestalkconitinue);
            if ($answer->getText() === 'yes') {
                $this->yesTalkcontinueansquestionans1();
            } else {
                $this->yesTalkcontinueansquestionans();
            }
        });
    }


    public function yesTalkcontinueansquestionans1()
    {
        $this->say("Okay, lets start <br>
            1. Close down your eyes.<br>
            2. Relax your mouth.<br>
            3. Take a deep breath in through your nose for 6 full seconds..<br>
            4. Hold this breath for 7 seconds.<br>
            5. pucker your mouth and exhale out through the mouth with a whooooosh sound for 8 seconds.<br>
            6. Repeat this 6-7-8 breath for at least 5 rounds, or as long as you wish");

        $this->yesTalkcontinueansquestionansques();
    }

    public function yesTalkcontinueansquestionansques()
    {
        $this->ask('You are doing great!Do you feel better?[yes/no]', function (Answer $answer) {
            $this->yestalkconitinue = $answer->getText();
            $this->say($this->yestalkconitinue);
            if ($answer->getText() === 'yes') {
                $this->yesTalkcontinueansquestionansquesans();
            } else {
                $this->ventquestion();
            }
        });
    }

    public function yesTalkcontinueansquestionansquesans()
    {
        $this->say("Thats wonderfull Im glad it helped!");

        $this->ventquestion();
    }

    //yes 


    // 3 . Do you want to vent more
    public function ventquestion()
    {
        $this->ask('Do you want to vent more?[yes/no]', function (Answer $answer) {
            $this->yestalkconitinue = $answer->getText();
            $this->say($this->yestalkconitinue);
            if ($answer->getText() === 'yes') {
                $this->ventyes();
            } else {
                $this->knowexperience();
            }
        });
    }
    // Vent yes

    public function ventyes()
    {
        $this->ask('I got you. Go ahead', function (Answer $answer) {
            $this->bot->userStorage()->save([
                'ventyes' => $answer->getText(),
            ]);


            $this->ventyesques();
        });
    }

    public function ventyesques()
    {
        $this->ask('That must have been hard for you. Im sorry you had to go through that. Are you feeling better?[yes/no]', function (Answer $answer) {
            $this->yestalkconitinue = $answer->getText();
            $this->say($this->yestalkconitinue);
            if ($answer->getText() === 'yes') {
                $this->ventyesquesans();
            } else {
                // $this->knowexperience();
                $this->ventquestion();
            }
        });
    }

    public function ventyesquesans()
    {
        $this->say("Thats good to hear im glad.");
        $this->knowexperience();
    }



    // Know experience

    public function knowexperience()
    {
        $this->ask('We Have other things you can check out! Do you want to read on how others are doing on their own experience?[yes/no]', function (Answer $answer) {
            $this->yestalkconitinue = $answer->getText();
            $this->say($this->yestalkconitinue);
            if ($answer->getText() === 'yes') {
                $this->communitypagelink();
            } else {
                // $this->knowexperience();
                $this->knowexperience1();
            }
        });
    }

    public function knowexperience1()
    {
        $this->ask('How about booking a psychiatrist?[yes/no]', function (Answer $answer) {
            $this->yestalkconitinue = $answer->getText();
            $this->say($this->yestalkconitinue);
            if ($answer->getText() === 'yes') {
                $this->bookingpage();
            } else {
                // $this->knowexperience();
                $this->knowexperience2();
            }
        });
    }

    public function knowexperience2()
    {
        $this->ask('Do you want to talk to someone?[yes/no]', function (Answer $answer) {
            $this->yestalkconitinue = $answer->getText();
            $this->say($this->yestalkconitinue);
            if ($answer->getText() === 'yes') {

                $this->listofhotlines();
            } else {
                // $this->knowexperience();
                $this->knowexperience3();
            }
        });
    }


    // yes

    public function communitypagelink()
    {
        $this->say('<a href="https://activehelp.site/forum" target="_blank"><button class="btn" >Community Page</button></a><br>');
        $this->endconvo();
    }

    public function bookingpage()
    {
        $this->say('<a href="https://activehelp.site/#doctor-chat" target="_blank"><button class="btn" >Booking Page</button></a><br>');
        $this->endconvo();
    }

    public function listofhotlines()
    {
        $question = Question::create('Click the button bellow to check list of hotlines')
            ->callbackId('select_talk')
            ->addButtons([
                Button::create('list of hotlines')->value('Here are the hotlines: <br />
                CHSO(8am to 5pm): <br />
                0919 0696 361 <br />
                National Center for Mental Health 24/7: <br />
                0917 8998 727 <br />
                0966 3514 518 <br />
                0908 6392 672 <br/>
                Hopeline PH: <br />
                0917 558 4673 <br />  
                DOH also has hotline you can contact. <br />
                Landline: <br />
                1553 <br />
                It’s accessible all over Luzon and is also toll-free. <br />
                There are also numbers you can call on your phone. <br />
                Numbers for those using the Globe network: <br />
                0966-351-4518 <br />
                0917-899-8727 <br />
                A number for those using the Smart network: <br />
                0908-639-2672'),
            ]);

        $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $this->bot->userStorage()->save([
                    'listofhotlines' => $answer->getValue(),
                ]);

                $this->say($answer->getText());
            }
            $this->endconvo();
        });
    }



    public function knowexperience3()
    {
        $this->ask('You can do a breathing exercise. How does that sound?[yes/no]', function (Answer $answer) {
            $this->yestalkconitinue = $answer->getText();
            $this->say($this->yestalkconitinue);
            if ($answer->getText() === 'yes') {
                $this->endconvo();
            } else {
                // $this->knowexperience();
                $this->sorry();
            }
        });
    }

    public function sorry()
    {
        $this->say('Im sorry I wasnt of help to what you wanted to do. I do hope you will be better soon');
        $this->endconvo();
    }











    public function endconvo()
    {
        $this->bot->startConversation(new BookingConversation()); // Trigger the next conversation
    }



    public function run()
    {
        // This will be called immediately
        $this->askName();
    }
}
