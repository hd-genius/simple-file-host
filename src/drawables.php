<?php
trait Drawable {
    function draw() {
        super::draw();
    }
}

class BackButton {
    use Drawable;
    
    static $instance;
    
    function draw() {
        echo "<a id=\"parent-button\" class=\"material-symbols-outlined\" href=\"..\">";
        echo "&#xe5d8;";
        echo "</a>";
    }
}

BackButton::$instance = new BackButton();

class FileSystemEntry {
    use Drawable;

    protected $type_display;
    protected $name;

    function draw() {
        echo "<tr>";
        $this->drawCell($this->type_display, "material-symbols-outlined");
        $this->drawCell($this->getNameCellContent());
        $this->drawCell("");
        $this->drawCell("");
        $this->drawCell("<button class=\"material-symbols-outlined\">&#xe5d3;</button>");
        echo "</tr>";
    }

    static function drawCell($contents, $classes=NULL) {
        if (isset($classes)) {
            echo "<td class=\"$classes\">$contents</td>";
        } else {
            echo "<td>$contents</td>";
        }
    }

    function getNameCellContent() {
        return $this->name;
    }
}

class FolderEntry extends FileSystemEntry {
    protected $type_display = "&#xe2c7;";
    protected $name = "test folder";

    function getNameCellContent() {
        return "<a href=\"\">" . $this->name . "</a>";
    }
}

class FileEntry extends FileSystemEntry {
    protected $type_display = "&#xe873;";
    protected $name = "test file";
}
?>