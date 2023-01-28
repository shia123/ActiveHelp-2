<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class SelectServiceConversation extends Conversation
{
    public function askService()
    {
        $question = Question::create('Did you feel depressed or sad this week?')
            ->callbackId('select_feel')
            ->addButtons([
                Button::create('Not at all')->value('Not at all'),
                Button::create('Several Days')->value('Several Days'),
                Button::create('Most Days')->value('Most Days'),
                Button::create('Nearly Every Day')->value('Nearly Every Day'),
                
            ]);

        $this->ask($question, function(Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $this->bot->userStorage()->save([
                    'feel' => $answer->getValue(),
                ]);

                $this->say($answer->getText());
            }

            // $this->bot->startConversation(new BookingConversation()); // Trigger the next conversation
            $this->askService2();

        });
    }

    public function askService2()
    {
        $question = Question::create('How about the feeling of anxiety or stress this week?
')
            ->callbackId('select_feel')
            ->addButtons([
                Button::create('Not at all')->value('Not at all'),
                Button::create('Several Days')->value('Several Days'),
                Button::create('Most Days')->value('Most Days'),
                Button::create('Nearly Every Day')->value('Nearly Every Day'),
                
            ]);

        $this->ask($question, function(Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $this->bot->userStorage()->save([
                    'feel' => $answer->getValue(),
                ]);

                $this->say($answer->getText());
            }

            $this->askService3();

        });
    }

    public function askService3()
    {
        $question = Question::create('Did you ever feel irritable or easily frustrated this week?

')
            ->callbackId('select_feel')
            ->addButtons([
                Button::create('Not at all')->value('Not at all'),
                Button::create('Several Days')->value('Several Days'),
                Button::create('Most Days')->value('Most Days'),
                Button::create('Nearly Every Day')->value('Nearly Every Day'),
                
            ]);

        $this->ask($question, function(Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $this->bot->userStorage()->save([
                    'feel' => $answer->getValue(),
                ]);

                $this->say($answer->getText());
            }

            // $this->bot->startConversation(new BookingConversation()); // Trigger the next conversation
            $this->askService4();

        });
    }


    public function askService4()
    {
        $question = Question::create('How often were you having trouble falling asleep or sleeping too much this week?

')
            ->callbackId('select_feel')
            ->addButtons([
                Button::create('Not at all')->value('Not at all'),
                Button::create('Several Days')->value('Several Days'),
                Button::create('Most Days')->value('Most Days'),
                Button::create('Nearly Every Day')->value('Nearly Every Day'),
                
            ]);

        $this->ask($question, function(Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $this->bot->userStorage()->save([
                    'feel' => $answer->getValue(),
                ]);

                $this->say($answer->getText());
            }

            // $this->bot->startConversation(new BookingConversation()); // Trigger the next conversation
            $this->askService5();

        });
    }


    public function askService5()
    {
        $question = Question::create('Did you ever feel tired or have no energy at all this week?

')
            ->callbackId('select_feel')
            ->addButtons([
                Button::create('Not at all')->value('Not at all'),
                Button::create('Several Days')->value('Several Days'),
                Button::create('Most Days')->value('Most Days'),
                Button::create('Nearly Every Day')->value('Nearly Every Day'),
                
            ]);

        $this->ask($question, function(Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $this->bot->userStorage()->save([
                    'feel' => $answer->getValue(),
                ]);

                $this->say($answer->getText());
            }

            // $this->bot->startConversation(new BookingConversation()); // Trigger the next conversation
            $this->askService6();

        });
    }


    public function askService6()
    {
        $question = Question::create('Did you ever feel like you wanted to leave this earth for good?

')
            ->callbackId('select_feel')
            ->addButtons([
                Button::create('Not at all')->value('Not at all'),
                Button::create('Several Days')->value('Several Days'),
                Button::create('Most Days')->value('Most Days'),
                Button::create('Nearly Every Day')->value('Nearly Every Day'),
                
            ]);

        $this->ask($question, function(Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $this->bot->userStorage()->save([
                    'feel' => $answer->getValue(),
                ]);

                $this->say($answer->getText());
            }

            // $this->bot->startConversation(new BookingConversation()); // Trigger the next conversation
            $this->askService7();

        });
    }

    public function askService7()
    {
        $this->ask('Okay, you got through all those questions. 
        Good Job!
        I know it seemed like a lot of questions
        But these questions will help determine your current state which is very important.
        
            ', function(Answer $answer) {
            $this->bot->userStorage()->save([
                'disclaimer' => $answer->getText(),
            ]);
    
            $this->say('From the website’s name “ActiveHelp”
            Our website actively helps those who want to get help.<br>
            There are a ton of things that you can do here! 
            You have me, PsychBot, to talk to anytime because I am available 24/7!<br>
            You also have the community where you can see the experiences of other people. <br>
            Another cool thing about it is that you can comment on their posts too and post one yourself! 
            A screenshot of a post and a comment <br>
            Another thing you can do on the website is that you can book real, professional psychiatrists who can further help you. 
            These psychiatrists are based in Baguio City. <br>
            You can see their entire schedule too!<br>
            A screenshot of a psychiatrist’s profile with their schedule.

            ');
    
            // $this->bot->startConversation(new SelectServiceConversation()); // Trigger the next conversation
            // $this->askfyi();
            $this->bot->startConversation(new BookingConversation()); // Trigger the next conversation
        });
    }


    

    public function run()
    {
        $this->askService();
    }
}