<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar static  properties
    </title>
</head>
<body>
    <?php\
    class ParentClass
    {
    public static $judul = "hi,saya propertie static dari" . __CLASS__;

    public function display()
{
    echo $this->judul;
}
    }
    class ChildClass extends ParentClass
    {
        public static $judul = "hi,saya propertie static dari" . __CLASS__ ;

        public static function display()
        {
            echo parent::display();
        }
        public static function displayFromChild()
        {
            echo self::display();
        }
    }
    $obj = new ParentClass;
    $obj2 = new ChildClass;
    ?>
    <h1><?php echo ChildClass:: displayFromChild(): ?>testing </h1>
</body>
</html>