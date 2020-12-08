<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $results = $this->app->old('results');
        
        return $this->app->view('index', [
          'results' => $results


        ]);
    }


    
    public function history()
    {
        $rounds =$this->app->db()->all('rounds');

        return $this->app->view('history', [
            'rounds' => $rounds


        ]);
    }

    public function round()
    {
        $id = $this->app->param('id');
        
        $round = $this->app->db()->findByID('rounds', $id);
        
        return $this->app->view('round', [

        'round' => $round


        ]);
    }

    public function play()
    {
        $this->app->validate([
            'move' => 'required'
        ]);
        $move = $this->app->input('move');

        $moves = ['rock', 'paper','scissors'];
        $computerchoice = $moves[rand(0, 2)];

        $results = " ";
    
        $Win = 'The User Won!';
        $Lose = 'The User Lost!' ;
        $Tie = 'It is a Tie!' ;

        if ($move == $computerchoice) {
            $results = $Tie;
        } elseif ($move == 'rock' and $computerchoice == 'paper') {
            $results = $Lose;
        } elseif ($move == 'scissors' and $computerchoice == 'paper') {
            $results = $Win;
        } elseif ($move == 'paper' and $computerchoice == 'scissors') {
            $results = $Lose;
        } elseif ($move == 'paper' and $computerchoice == 'rock') {
            $results = $Win;
        } elseif ($move == 'scissors' and $computerchoice == 'rock') {
            $results = $Lose;
        } elseif ($move == 'rock' and $computerchoice == 'scissors') {
            $results = $Win;
        }

        $data = [
            'move' => $move,
            'win' => $results,
            'time' => date('Y-m-d H:i:s'),
            'computer' => $computerchoice
        ];
        
        $this->app->db()->insert('rounds', $data);

        //Redirect the user back to the home page with the form to play again

        $this->app->redirect('/', [
        'results' => [
            'move' => $move,
            'win' => $results,
            'computerchoice' => $computerchoice,
        ]
        ]);
    }
}