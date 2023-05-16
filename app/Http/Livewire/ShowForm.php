<?php

namespace App\Http\Livewire;

use Livewire\Component;

use OpenAI;

class ShowForm extends Component
{
    public $bio;
    public $keywords;

    public function render()
    {
        return view('livewire.show-form');
    }

    public function getBio()
    {
        $key = config('services.open_ai.api_key');
        $client = OpenAI::client($key);
        
        $result = $client->completions()->create([
            'model' => 'text-davinci-003',
           'prompt' => 'Write a LinkedIn bio including the keywords: ' . $this->keywords,
            'max_tokens' => 256,
            'temperature' => 1 
        ]);

        $this->bio = $result->choices[0]->text;
    }
}
