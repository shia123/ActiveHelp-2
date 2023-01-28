<?php

namespace App\Botman;

use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class BookingConversation extends Conversation
{
    public function confirmBooking()
    {   

        $user = $this->bot->userStorage()->find();

        $message = '-------------------------------------- <br>';
        $message .= 'Name : ' . $user->get('realtalkans') . '<br>';
        $message .= '---------------------------------------';


        $this->say('ActiveHelp is always here for you :)');

        $this->ask('Do you want to restart a conversation?[yes/no]', function(Answer $answer) {
        $this->yestalkconitinue = $answer->getText();
        $this->say($this->yestalkconitinue);
            if ($answer->getText() === 'yes'){
                $this->bot->startConversation(new OnboardingConversation()); // Trigger the next conversation
            }else{
                // $this->knowexperience();
                $this->bot->startConversation(new BookingConversation()); // Trigger the next conversation
            }
        });
    }

    public function run()
    {
        $this->confirmBooking();
    }
}