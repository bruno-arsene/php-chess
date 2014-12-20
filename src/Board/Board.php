<?php

namespace Chess\Board;


use Chess\Piece\Piece;
use Chess\Position\Position;

class Board {

    const SIZE = 8;

    private $board;

    /**
     * @param array $board
     */
    public function setBoard(array $board)
    {
        $this->board = $board;
    }

    /**
     * @param Piece $piece
     * @param Position $position
     * @return bool
     * @throws \OutOfRangeException
     */
    public function setAt(Piece $piece, Position $position)
    {
        $this->board[$position->getX()][$position->getY()] = $piece;
    }
}
