<?php

namespace Chess\Piece\Type;


use Chess\Piece\Piece;

class Rook extends Piece
{

    public function __construct($color)
    {
        parent::__construct(PieceType::ROOK, $color);
    }

}
