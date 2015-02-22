<?php

namespace Chess\Board\Builder;


use Chess\Board\Board;
use Chess\Piece\Placer\Placer;
use Chess\Piece\Positioner\BishopPositions;
use Chess\Piece\Positioner\KingPositions;
use Chess\Piece\Positioner\KnightPositions;
use Chess\Piece\Positioner\PawnPositions;
use Chess\Piece\Positioner\QueenPositions;
use Chess\Piece\Positioner\RookPositions;
use Chess\Piece\Type\PieceType;

class BoardBuilder {

    /**
     * @var \Chess\Board\Board
     */
    private $board;

    public function initializeBoard()
    {
        $line = array_fill(0, Board::SIZE, null);
        $boardArray = array_fill(0, Board::SIZE, $line);
        $this->board = new Board($boardArray);
    }

    public function placePiecesOnBoard()
    {
        $placer = new Placer($this->board);

        $placer->place(new PawnPositions(), PieceType::PAWN);
        $placer->place(new BishopPositions(), PieceType::BISHOP);
        $placer->place(new KnightPositions(), PieceType::KNIGHT);
        $placer->place(new RookPositions(), PieceType::ROOK);
        $placer->place(new QueenPositions(), PieceType::QUEEN);
        $placer->place(new KingPositions(), PieceType::KING);
    }

    /**
     * @return Board
     */
    public function getBoard()
    {
        return $this->board;
    }

}
