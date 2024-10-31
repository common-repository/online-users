<?php

class uteUSBlogBuzzTime
{

    private $wpdb;
    private $parameters = array();
    private $option_name = 'usutilisateursenligne-options';

    /**
     * @var BlogBuzzTime
     * @access private
     * @static
     */
    private static $_instance = null;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $path;

    private function __construct()
    {
        add_action('wp_footer', 'uteUSaddBlogBuzzTimeJs', 21);
        $this->parameters = get_option($this->option_name);
    }

    public function validate($input)
    {
        return $input;
    }
    public static function getInstance()
    {
        if (is_null(self::$_instance))
                self::$_instance = new uteUSBlogBuzzTime();

        return self::$_instance;
    }

    public function install()
    {

    }

    /**
     * @return BlogBuzzTime
     */
    public function uninstall()
    {
        remove_action('wp_footer', 'uteUSaddBlogBuzzTimeJs');
        delete_option($this->option_name);
    }
}
