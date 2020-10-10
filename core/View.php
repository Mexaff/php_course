<?php

namespace Core;

/**
 * View
 */
class View
{
    /** Php file extension */
    const FILE_EXTENSION_PHP = '.php';

    /**
     * @param $contentView
     * @param $templateView
     * @param null $data
     * @throws \Exception
     */

    public static function generateTemplate($templateName, $viewName, $data = null)
    {
        $viewPath = PUBLIC_ABSOLUTE_PATH. DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . $viewName . '.php';
        if(is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }
        $templates = PUBLIC_ABSOLUTE_PATH . DIRECTORY_SEPARATOR . 'view'. DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . $templateName . self::FILE_EXTENSION_PHP;
        if (file_exists($templates)) {
            include $templates;
        } else {
            throw new \Exception('Templates ' . $templates . ' absent');
        }

    }
    public static function generateView($viewName, $data = null)
    {
        $viewPath = PUBLIC_ABSOLUTE_PATH . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . $viewName . '.php';
        if (is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }
        if (file_exists($viewPath)) {
            include $viewPath;
        } else {
            throw new \Exception('View ' . $viewPath . ' absent');
        }
    }

}
