@extends('welcome')
    @section('head')
        <style type="text/css" media="all">
            @import "{{asset('css/main.css')}}";
        </style>
    @endsection

    @section('content')
        <div id="board" class="tableDivWrap surroundShade">
        <table id="tb">
            <tr>
                <td class="TripleWord">
                    <div id="BoardSquareOrTile_0x0" class="Empty ui-droppable">
                        <a><span>TRIPLE WORD SCORE</span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_1x0" class="Empty ui-droppable">
                        <a><span> </span></a></div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_2x0" class="Empty ui-droppable">
                        <a><span> </span></a></div>
                </td>
                <td class="DoubleLetter">
                    <div id="BoardSquareOrTile_3x0" class="Empty ui-droppable">
                        <a><span>DOUBLE LETTER SCORE</span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_4x0" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_5x0" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_6x0" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="TripleWord">
                    <div id="BoardSquareOrTile_7x0" class="Empty ui-droppable">
                        <a><span>TRIPLE WORD SCORE</span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_8x0" class="Empty ui-droppable">
                        <a><span> </span>
                        </a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_9x0" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_10x0" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="DoubleLetter">
                    <div id="BoardSquareOrTile_11x0" class="Empty ui-droppable">
                        <a><span>DOUBLE LETTER SCORE</span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_12x0" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_13x0" class="Empty ui-droppable">
                        <a><span> </span></a></div>
                </td>
                <td class="TripleWord">
                    <div id="BoardSquareOrTile_14x0" class="Empty ui-droppable">
                        <a><span>TRIPLE WORD SCORE</span></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="Normal">
                    <div id="BoardSquareOrTile_0x1" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="DoubleWord">
                    <div id="BoardSquareOrTile_1x1" class="Empty ui-droppable">
                        <a><span>DOUBLE</span><br><span>WORD</span><br><span>SCORE</span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_2x1" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_3x1" class="Empty ui-droppable">
                        <a><span> </span></a></div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_4x1" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="TripleLetter">
                    <div id="BoardSquareOrTile_5x1" class="Empty ui-droppable">
                        <a><span>TRIPLE LETTER SCORE</span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_6x1" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_7x1" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_8x1" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="TripleLetter">
                    <div id="BoardSquareOrTile_9x1" class="Empty ui-droppable">
                        <a><span>TRIPLE LETTER SCORE</span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_10x1" class="Empty ui-droppable">
                        a><span> </span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_11x1" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_12x1" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="DoubleWord">
                    <div id="BoardSquareOrTile_13x1" class="Empty ui-droppable">
                        <a><span>DOUBLE</span><br><span>WORD</span><br><span>SCORE</span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_14x1" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="Normal">
                    <div id="BoardSquareOrTile_0x2" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_1x2" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="DoubleWord">
                    <div id="BoardSquareOrTile_2x2" class="Empty ui-droppable">
                        <a><span>DOUBLE</span><br><span>WORD</span><br><span>SCORE</span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_3x2" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_4x2" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_5x2" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="DoubleLetter">
                    <div id="BoardSquareOrTile_6x2" class="Empty ui-droppable">
                        <a><span>DOUBLE LETTER SCORE</span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_7x2" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="DoubleLetter">
                    <div id="BoardSquareOrTile_8x2" class="Empty ui-droppable">
                        <a><span>DOUBLE LETTER SCORE</span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_9x2" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_10x2" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_11x2" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="DoubleWord">
                    <div id="BoardSquareOrTile_12x2" class="Empty ui-droppable">
                        <a><span>DOUBLE</span><br><span>WORD</span><br><span>SCORE</span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_13x2" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
                <td class="Normal">
                    <div id="BoardSquareOrTile_14x2" class="Empty ui-droppable">
                        <a><span> </span></a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="DoubleLetter">
                    <div id="BoardSquareOrTile_0x3" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_1x3" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_2x3" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleWord"><div id="BoardSquareOrTile_3x3" class="Empty ui-droppable"><a><span>DOUBLE</span><br><span>WORD</span><br><span>SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_4x3" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_5x3" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_6x3" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleLetter"><div id="BoardSquareOrTile_7x3" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_8x3" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_9x3" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_10x3" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleWord"><div id="BoardSquareOrTile_11x3" class="Empty ui-droppable"><a><span>DOUBLE</span><br><span>WORD</span><br><span>SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_12x3" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_13x3" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleLetter"><div id="BoardSquareOrTile_14x3" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td></tr><tr><td class="Normal"><div id="BoardSquareOrTile_0x4" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_1x4" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_2x4" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_3x4" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleWord"><div id="BoardSquareOrTile_4x4" class="Empty ui-droppable"><a><span>DOUBLE</span><br><span>WORD</span><br><span>SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_5x4" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_6x4" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_7x4" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_8x4" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_9x4" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleWord"><div id="BoardSquareOrTile_10x4" class="Empty ui-droppable"><a><span>DOUBLE</span><br><span>WORD</span><br><span>SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_11x4" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_12x4" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_13x4" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_14x4" class="Empty ui-droppable"><a><span> </span></a></div></td></tr><tr><td class="Normal"><div id="BoardSquareOrTile_0x5" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="TripleLetter"><div id="BoardSquareOrTile_1x5" class="Empty ui-droppable"><a><span>TRIPLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_2x5" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_3x5" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_4x5" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="TripleLetter"><div id="BoardSquareOrTile_5x5" class="Empty ui-droppable"><a><span>TRIPLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_6x5" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_7x5" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_8x5" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="TripleLetter"><div id="BoardSquareOrTile_9x5" class="Empty ui-droppable"><a><span>TRIPLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_10x5" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_11x5" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_12x5" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="TripleLetter"><div id="BoardSquareOrTile_13x5" class="Empty ui-droppable"><a><span>TRIPLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_14x5" class="Empty ui-droppable"><a><span> </span></a></div></td></tr><tr><td class="Normal"><div id="BoardSquareOrTile_0x6" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_1x6" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleLetter"><div id="BoardSquareOrTile_2x6" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_3x6" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_4x6" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_5x6" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleLetter"><div id="BoardSquareOrTile_6x6" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_7x6" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleLetter"><div id="BoardSquareOrTile_8x6" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_9x6" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_10x6" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_11x6" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleLetter"><div id="BoardSquareOrTile_12x6" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_13x6" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_14x6" class="Empty ui-droppable"><a><span> </span></a></div></td></tr><tr><td class="TripleWord"><div id="BoardSquareOrTile_0x7" class="Empty ui-droppable"><a><span>TRIPLE WORD SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_1x7" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_2x7" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleLetter"><div id="BoardSquareOrTile_3x7" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_4x7" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_5x7" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_6x7" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleWord"><div id="BoardSquareOrTile_7x7" class="CenterStart ui-droppable"><a><span>★</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_8x7" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_9x7" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_10x7" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleLetter"><div id="BoardSquareOrTile_11x7" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_12x7" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_13x7" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="TripleWord"><div id="BoardSquareOrTile_14x7" class="Empty ui-droppable"><a><span>TRIPLE WORD SCORE</span></a></div></td></tr><tr><td class="Normal"><div id="BoardSquareOrTile_0x8" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_1x8" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleLetter"><div id="BoardSquareOrTile_2x8" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_3x8" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_4x8" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_5x8" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleLetter"><div id="BoardSquareOrTile_6x8" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_7x8" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleLetter"><div id="BoardSquareOrTile_8x8" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_9x8" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_10x8" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_11x8" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleLetter"><div id="BoardSquareOrTile_12x8" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_13x8" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_14x8" class="Empty ui-droppable"><a><span> </span></a></div></td></tr><tr><td class="Normal"><div id="BoardSquareOrTile_0x9" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="TripleLetter"><div id="BoardSquareOrTile_1x9" class="Empty ui-droppable"><a><span>TRIPLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_2x9" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_3x9" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_4x9" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="TripleLetter"><div id="BoardSquareOrTile_5x9" class="Empty ui-droppable"><a><span>TRIPLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_6x9" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_7x9" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_8x9" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="TripleLetter"><div id="BoardSquareOrTile_9x9" class="Empty ui-droppable"><a><span>TRIPLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_10x9" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_11x9" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_12x9" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="TripleLetter"><div id="BoardSquareOrTile_13x9" class="Empty ui-droppable"><a><span>TRIPLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_14x9" class="Empty ui-droppable"><a><span> </span></a></div></td></tr><tr><td class="Normal"><div id="BoardSquareOrTile_0x10" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_1x10" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_2x10" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_3x10" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleWord"><div id="BoardSquareOrTile_4x10" class="Empty ui-droppable"><a><span>DOUBLE</span><br><span>WORD</span><br><span>SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_5x10" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_6x10" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_7x10" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_8x10" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_9x10" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleWord"><div id="BoardSquareOrTile_10x10" class="Empty ui-droppable"><a><span>DOUBLE</span><br><span>WORD</span><br><span>SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_11x10" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_12x10" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_13x10" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_14x10" class="Empty ui-droppable"><a><span> </span></a></div></td></tr><tr><td class="DoubleLetter"><div id="BoardSquareOrTile_0x11" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_1x11" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_2x11" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleWord"><div id="BoardSquareOrTile_3x11" class="Empty ui-droppable"><a><span>DOUBLE</span><br><span>WORD</span><br><span>SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_4x11" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_5x11" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_6x11" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleLetter"><div id="BoardSquareOrTile_7x11" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_8x11" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_9x11" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_10x11" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleWord"><div id="BoardSquareOrTile_11x11" class="Empty ui-droppable"><a><span>DOUBLE</span><br><span>WORD</span><br><span>SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_12x11" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_13x11" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleLetter"><div id="BoardSquareOrTile_14x11" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td></tr><tr><td class="Normal"><div id="BoardSquareOrTile_0x12" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_1x12" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleWord"><div id="BoardSquareOrTile_2x12" class="Empty ui-droppable"><a><span>DOUBLE</span><br><span>WORD</span><br><span>SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_3x12" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_4x12" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_5x12" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleLetter"><div id="BoardSquareOrTile_6x12" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_7x12" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleLetter"><div id="BoardSquareOrTile_8x12" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_9x12" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_10x12" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_11x12" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleWord"><div id="BoardSquareOrTile_12x12" class="Empty ui-droppable"><a><span>DOUBLE</span><br><span>WORD</span><br><span>SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_13x12" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_14x12" class="Empty ui-droppable"><a><span> </span></a></div></td></tr><tr><td class="Normal"><div id="BoardSquareOrTile_0x13" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleWord"><div id="BoardSquareOrTile_1x13" class="Empty ui-droppable"><a><span>DOUBLE</span><br><span>WORD</span><br><span>SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_2x13" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_3x13" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_4x13" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="TripleLetter"><div id="BoardSquareOrTile_5x13" class="Empty ui-droppable"><a><span>TRIPLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_6x13" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_7x13" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_8x13" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="TripleLetter"><div id="BoardSquareOrTile_9x13" class="Empty ui-droppable"><a><span>TRIPLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_10x13" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_11x13" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_12x13" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleWord"><div id="BoardSquareOrTile_13x13" class="Empty ui-droppable"><a><span>DOUBLE</span><br><span>WORD</span><br><span>SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_14x13" class="Empty ui-droppable"><a><span> </span></a></div></td></tr><tr><td class="TripleWord"><div id="BoardSquareOrTile_0x14" class="Empty ui-droppable"><a><span>TRIPLE WORD SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_1x14" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_2x14" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleLetter"><div id="BoardSquareOrTile_3x14" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_4x14" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_5x14" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_6x14" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="TripleWord"><div id="BoardSquareOrTile_7x14" class="Empty ui-droppable"><a><span>TRIPLE WORD SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_8x14" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_9x14" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_10x14" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="DoubleLetter"><div id="BoardSquareOrTile_11x14" class="Empty ui-droppable"><a><span>DOUBLE LETTER SCORE</span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_12x14" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="Normal"><div id="BoardSquareOrTile_13x14" class="Empty ui-droppable"><a><span> </span></a></div></td><td class="TripleWord"><div id="BoardSquareOrTile_14x14" class="Empty ui-droppable"><a><span>TRIPLE WORD SCORE</span></a></div></td></tr></table></div>
    @endsection
