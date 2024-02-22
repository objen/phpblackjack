<?php

class game
{
    public array $deck = [["card" => "Ace of", "suit" => "Hearts", "value" => 11], ["card" => "Two of", "suit" => "Hearts", "value" => 2], ["card" => "Three of", "suit" => "Hearts", "value" => 3], ["card" => "Four of", "suit" => "Hearts", "value" => 4], ["card" => "Five of", "suit" => "Hearts", "value" => 5], ["card" => "Six of", "suit" => "Hearts", "value" => 6], ["card" => "Seven of", "suit" => "Hearts", "value" => 7], ["card" => "Eight of", "suit" => "Hearts", "value" => 8], ["card" => "Nine of", "suit" => "Hearts", "value" => 9], ["card" => "Ten of", "suit" => "Hearts", "value" => 10], ["card" => "Jack of", "suit" => "Hearts", "value" => 10], ["card" => "Queen of", "suit" => "Hearts", "value" => 10], ["card" => "King of", "suit" => "Hearts", "value" => 10], ["card" => "Ace of", "suit" => "Diamonds", "value" => 11], ["card" => "Two of", "suit" => "Diamonds", "value" => 2], ["card" => "Three of", "suit" => "Diamonds", "value" => 3], ["card" => "Four of", "suit" => "Diamonds", "value" => 4], ["card" => "Five of", "suit" => "Diamonds", "value" => 5], ["card" => "Six of", "suit" => "Diamonds", "value" => 6], ["card" => "Seven of", "suit" => "Diamonds", "value" => 7], ["card" => "Eight of", "suit" => "Diamonds", "value" => 8], ["card" => "Nine of", "suit" => "Diamonds", "value" => 9], ["card" => "Ten of", "suit" => "Diamonds", "value" => 10], ["card" => "Jack of", "suit" => "Diamonds", "value" => 10], ["card" => "Queen of", "suit" => "Diamonds", "value" => 10], ["card" => "King of", "suit" => "Diamonds", "value" => 10], ["card" => "Ace of", "suit" => "Clubs", "value" => 11], ["card" => "Two of", "suit" => "Clubs", "value" => 2], ["card" => "Three of", "suit" => "Clubs", "value" => 3], ["card" => "Four of", "suit" => "Clubs", "value" => 4], ["card" => "Five of", "suit" => "Clubs", "value" => 5], ["card" => "Six of", "suit" => "Clubs", "value" => 6], ["card" => "Seven of", "suit" => "Clubs", "value" => 7], ["card" => "Eight of", "suit" => "Clubs", "value" => 8], ["card" => "Nine of", "suit" => "Clubs", "value" => 9], ["card" => "Ten of", "suit" => "Clubs", "value" => 10], ["card" => "Jack of", "suit" => "Clubs", "value" => 10], ["card" => "Queen of", "suit" => "Clubs", "value" => 10], ["card" => "King of", "suit" => "Clubs", "value" => 10], ["card" => "Ace of", "suit" => "Spades", "value" => 11], ["card" => "Two of", "suit" => "Spades", "value" => 2], ["card" => "Three of", "suit" => "Spades", "value" => 3], ["card" => "Four of", "suit" => "Spades", "value" => 4], ["card" => "Five of", "suit" => "Spades", "value" => 5], ["card" => "Six of", "suit" => "Spades", "value" => 6], ["card" => "Seven of", "suit" => "Spades", "value" => 7], ["card" => "Eight of", "suit" => "Spades", "value" => 8], ["card" => "Nine of", "suit" => "Spades", "value" => 9], ["card" => "Ten of", "suit" => "Spades", "value" => 10], ["card" => "Jack of", "suit" => "Spades", "value" => 10], ["card" => "Queen of", "suit" => "Spades", "value" => 10], ["card" => "King of", "suit" => "Spades", "value" => 10],];

    public function __construct()
    {
        return $this->runGame();
    }
    public function runGame(){
        echo '<h1>Blackjack</h1> <p>Welcome!</p><h3>Lets Deal!</h3><p>The cards are...</p>';
        $this->deal();
    }
    public function deal()
    {
        //shuffle deck & deal 4
        shuffle($this->deck);
        $card1 = new card (array_pop($this->deck));
        $card2 = new card (array_pop($this->deck));
        $card3 = new card (array_pop($this->deck));
        $card4 = new card (array_pop($this->deck));
        $hand = [$card1, $card2, $card3, $card4];
        $score1 = new hand($hand);
        //deal extra
        if ($score1->dealAgain === true){
            $card5 = new card (array_pop($this->deck));
            (array_push($hand, $card5,));
        } else {
            echo 'Press refresh to play again.';
            return null;
        }
        if ($score1->dealAgain === true && ($score1->pCard === true && $score1->dCard === true)) {
            $card6 = new card (array_pop($this->deck));
            (array_push($hand, $card6));
        }
        $score2 = new hand ($hand, $score1->pCard, $score1->dCard);
        //deal extra
        if ($score2->dealAgain === true){
            echo "more cards needed";
            $card7 = new card (array_pop($this->deck));
            (array_push($hand, $card7,));
        } else {
            echo 'Press refresh to play again.';
            return null;
        }
        if ($score2->dealAgain === true && $score2->pCard === true && $score2->dCard === true) {
            echo 'getting card 8';
            $card8 = new card (array_pop($this->deck));
            (array_push($hand, $card8));
        }
        $score3 = new hand ($hand, $score2->pCard, $score2->dCard);
        if ($score3->dealAgain === true){
            echo "more cards needed";
//            $card9 = new card (array_pop($this->deck));
//            (array_push($hand, $card9,));
        } else {
            echo 'Press refresh to play again.';
            return null;
        }
//        if ($score3->dealAgain === true && $score3->pCard === true && $score3->dCard === true) {
//            $card10 = new card (array_pop($this->deck));
//            (array_push($hand, $card10));
//        }
//        $score4 = new hand ($hand, $score2->pCard, $score2->dCard);
    }
}
class card {
    public string $desc;
    public string $suit;
    public int $value;

    public function __construct(array $card)
    {
        $this->desc=$card['card'];
        $this->suit=$card['suit'];
        $this->value=$card['value'];
    }
}
class hand
{
    public $card1;
    public $card2;
    public $card3;
    public $card4;
    public $card5;
    public $card6;
    public $card7;
    public $card8;
    public int $pScore;
    public int $dScore;
    public bool $dealAgain = false;
    public bool $pCard;
    public bool $dCard;

    public function __construct(array $cards, bool $pcard=false, bool $dcard=false)
    {
        $this->pCard = $pcard;
        $this->dCard = $dcard;
        $this->card1 = $cards[0];
        $this->card2 = $cards[1];
        $this->card3 = $cards[2];
        $this->card4 = $cards[3];


        $this->pScore = $this->card1->value + $this->card2->value;
        $this->dScore = $this->card3->value + $this->card4->value;
        //show round scores
        if (count($cards) === 4) {
            echo "Player receives " . $this->card1->desc . " " . $this->card1->suit . ' and ' . $this->card2->desc . " " . $this->card2->suit . '. They score ' . $this->pScore . '<br>';
            echo "Dealer receives " . $this->card3->desc . " " . $this->card3->suit . ' and ' . $this->card4->desc . " " . $this->card4->suit . '. They score ' . $this->dScore . '<br>';
            if ($this->pScore > 14 && $this->dScore > 14) {
                $this->dealAgain = false;
                $result1 = new result($this->pScore, $this->dScore);
//                echo $result1->winner;
            } else {
                echo '<p>Dealing more cards...</p>';
                $this->dealAgain = true;
                if ($this->pScore < 15) {
                    $this->pCard = true;
                }
                if ($this->dScore < 15) {
                    $this->dCard = true;
                }
            }
        }
        if (count($cards) === 5) {
            $this->card5 = $cards[4];
            if ($this->pCard === true) {
                $this->pScore += $this->card5->value;
                echo "Player receives " . $this->card1->desc . " " . $this->card1->suit . ', ' . $this->card2->desc . " " . $this->card2->suit . ' and ' . $this->card5->desc . " " . $this->card5->suit . '. They score ' . $this->pScore . '<br>';
            } else {
                $this->dScore += $this->card5->value;
                echo "Dealer receives " . $this->card3->desc . " " . $this->card3->suit . ', ' . $this->card4->desc . " " . $this->card4->suit . ' and ' . $this->card5->desc . " " . $this->card5->suit . '. They score ' . $this->dScore . '<br>';
            }
            if ($this->pScore > 14 && $this->dScore > 14) {

                $this->dealAgain = false;
                $result2 = new result($this->pScore, $this->dScore);
            } else {
                echo '<p>Dealing more cards...</p>';
                $this->dealAgain = true;
                if ($this->pScore <= 14) {
                    $this->pCard = true;
                }
                if ($this->dScore <= 14) {
                    $this->dCard = true;
                }
            }
        }
        if (count($cards) === 6) {
            $this->card5 = $cards[4];
            $this->card6 = $cards[5];
            $this->pScore += $this->card5->value;
            echo "Player receives " . $this->card1->desc . " " . $this->card1->suit . ', ' . $this->card2->desc . " " . $this->card2->suit . ' and ' . $this->card5->desc . " " . $this->card5->suit . '. They score ' . $this->pScore . '<br>';
            $this->dScore += $this->card6->value;
            echo "Dealer receives " . $this->card3->desc . " " . $this->card3->suit . ', ' . $this->card4->desc . " " . $this->card4->suit . ' and ' . $this->card6->desc . " " . $this->card6->suit . '. They score ' . $this->dScore . '<br>';
            if ($this->pScore > 14 && $this->dScore > 14) {
                $this->dealAgain = false;
                $result3 = new result($this->pScore, $this->dScore);
            } else {
                echo '<p>Dealing more cards...</p>';
                $this->dealAgain = true;
                if ($this->pScore <= 14) {
                    $this->pCard = true;
                }
                if ($this->dScore <= 14) {
                    $this->dCard = true;
                }
            }
        }
        if (count($cards) === 7) {
            echo 'dealing 7 cards';
            $this->card7 = $cards[6];
            if ($this->pCard === true) {
                $this->pScore += $this->card7->value;
                echo "Player receives " . $this->card1->desc . " " . $this->card1->suit . ', ' . $this->card2->desc . " " . $this->card2->suit . ', ' . $this->card5->desc . " " . $this->card5->suit . ' and ' . $this->card7->desc . " " . $this->card7->suit . '. They score ' . $this->pScore . '<br>';
            } else {
                $this->dScore += $this->card7->value;
                echo "Dealer receives " . $this->card3->desc . " " . $this->card3->suit . ', ' . $this->card4->desc . " " . $this->card4->suit . ', ' . $this->card5->desc . " " . $this->card5->suit . ' and ' . $this->card7->desc . " " . $this->card7->suit . '. They score ' . $this->dScore . '<br>';
            }
            if ($this->pScore > 14 && $this->dScore > 14) {
                $this->dealAgain = false;
                $result4 = new result($this->pScore, $this->dScore);
            } else {
                echo '<p>Dealing more cards...</p>';
                $this->dealAgain = true;
                if ($this->pScore <= 14) {
                    $this->pCard = true;
                }
                if ($this->dScore <= 14) {
                    $this->dCard = true;
                }
            }
        }
//        if (count($cards) === 8) {
//            $this->card7 = $cards[6];
//            $this->card8 = $cards[7];
//            $this->pScore += $this->card7->value;
//            echo "Player receives " . $this->card1->desc . " " . $this->card1->suit . ', ' . $this->card2->desc . " " . $this->card2->suit . ', ' . $this->card5->desc . " " . $this->card5->suit . ' and ' . $this->card7->desc . " " . $this->card7->suit . '. They score ' . $this->pScore . '<br>';
//            $this->dScore += $this->card8->value;
//            echo "Dealer receives " . $this->card3->desc . " " . $this->card3->suit . ', ' . $this->card4->desc . " " . $this->card4->suit . ', ' . $this->card6->desc . " " . $this->card6->suit . ' and ' . $this->card8->desc . " " . $this->card8->suit . '. They score ' . $this->dScore . '<br>';
//            if ($this->pScore > 14 && $this->dScore > 14) {
//                $this->dealAgain = false;
//                $result5 = new result($this->pScore, $this->dScore);
//            } else {
//                echo '<p>Dealing more cards...</p>';
//                $this->dealAgain = true;
//                if ($this->pScore <= 14) {
//                    $this->pCard = true;
//                }
//                if ($this->dScore <= 14) {
//                    $this->dCard = true;
//                }
//            }
//        }
    }
}
class result {
    public int $p;
    public int $d;
//    public string $winner;
    public function __construct(int $p, int $d)
    {
        $this->p = $p;
        $this->d = $d;
        if (($this->p < $this->d && $this->d <=21) || ($this->p > 21 && $this->d <= 21)){
                echo '<p>The Dealer wins!</p>';
            } elseif (($this->p > $this->d && $this->p <= 21) || ($this->p <= 21 && $this->d > 21)){
                echo '<p>The player wins!</p>';
            } elseif ($this->p === $this->d || ($this->p > 21 && $this->d > 21)){
                echo '<p>It is a draw.</p>';
            }


    }
}

$game1 = new game();
