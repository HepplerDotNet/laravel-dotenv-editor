<?php

namespace HepplerDotNet\DotenvEditor;

use Illuminate\Support\Facades\Facade;

class DotenvEditorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'dotenveditor';
    }
}
