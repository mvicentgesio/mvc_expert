<?php 
class Render
{
    static function view( $filePath, $variables = [], $print = true )
    {
        $output = NULL;

        $filePath = ROOT.FOLDER_PATH."/views/".$filePath."/".$filePath.".php";
        
        if(file_exists($filePath))
        {
            extract($variables);

            ob_start();

            include ROOT.FOLDER_PATH.'/views/layout/header.php';
            include $filePath;
            include ROOT.FOLDER_PATH.'/views/layout/footer.php';
            
            //echo Render::renderKeys($variables, $filePath);

            $output = ob_get_clean();
        }

        if($print){
            print $output;
        }
        return $output;
    }

    static function renderKeys($data, $path)
    {
        $template = file_get_contents( $path );
        foreach( $data as $k => $v ) {
            $template = str_replace( '{' . $k . '}', $v, $template );
        }

        return $template;
    }

}
