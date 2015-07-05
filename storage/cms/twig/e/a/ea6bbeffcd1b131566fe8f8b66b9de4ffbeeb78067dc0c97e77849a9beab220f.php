<?php

/* C:\lamp\www\serviceme/themes/serviceme/partials/sidebar-left.htm */
class __TwigTemplate_ea6bbeffcd1b131566fe8f8b66b9de4ffbeeb78067dc0c97e77849a9beab220f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"sidebar\">
    <ul id=\"menuitems\">
        <h2>My Requests</h2>
        <li data-navigate=\"/\"><a><img src=\"";
        // line 4
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pixel.png");
        echo "\" class=\"svg-house-black\">Home</a></li>
        <li data-navigate=\"/library\" class=\"librarymenuitem sidebar-has-tracks\"><a><img src=\"";
        // line 5
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pixel.png");
        echo "\" class=\"svg-music-black\">Archive</a></li>

        <h2>Requests</h2>

        <li data-navigate=\"/new-playlist\"><a href=\"";
        // line 9
        echo url("/request");
        echo "\"><img class=\"svg-plus-black\" src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pixel.png");
        echo "\">New Request</a></li>

        <div class=\"new-playlist-input\">
            <input type=\"text\" class=\"new-playlist-input-field\">
        </div>
        <div class=\"playlists-menu\">

        </div>

        <h2>Discover</h2>
        <li data-navigate=\"/charts\" class=\"sidebar-has-tracks\"><a><img src=\"";
        // line 19
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pixel.png");
        echo "\" class=\"svg-star-black\">Top Offers</a></li>
        <li data-navigate=\"/charts\" class=\"sidebar-has-tracks\"><a><img src=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pixel.png");
        echo "\" class=\"svg-wheel-black\">Local Offers</a></li>
        <li data-navigate=\"/genres\" class=\"sidebar-has-tracks\"><a><img src=\"";
        // line 21
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pixel.png");
        echo "\" class=\"svg-upvote-black\">Categories</a></li>
        <li data-navigate=\"/time-machine/2014\" class=\"sidebar-has-tracks\"><a><img src=\"\" class=\"svg-time-black\">Timed Offers</a></li>
        <h2>Preferences</h2>
        <li data-navigate=\"/info\"><a><img src=\"";
        // line 24
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pixel.png");
        echo "\" class=\"svg-info-black\">About</a></li>
        <li data-navigate=\"/settings\"><a><img src=\"";
        // line 25
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pixel.png");
        echo "\" class=\"svg-wheel-black\">Settings</a></li>


    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\serviceme/themes/serviceme/partials/sidebar-left.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 25,  64 => 24,  58 => 21,  54 => 20,  50 => 19,  35 => 9,  28 => 5,  24 => 4,  19 => 1,);
    }
}
