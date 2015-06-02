<?php

/* partials/base.html.twig */
class __TwigTemplate_471463ce3cc16d01cfb9cfea4adbbb8295def1ff5c164d6b82e673b4c34a0520 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <!-- (1) Optimize for mobile versions: http://goo.gl/EOpFl -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- (1) force latest IE rendering engine: bit.ly/1c8EiC9 -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 10
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        } else {
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        }
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 11
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
        echo "\" />

    <meta name=\"HandheldFriendly\" content=\"True\" />
    <meta name=\"MobileOptimized\" content=\"320\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">

    ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metadata", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 19
            echo "        <meta ";
            if ($this->getAttribute($context["meta"], "name", array())) {
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "http_equiv", array())) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "charset", array())) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "property", array())) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "content", array())) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", array());
                echo "\" ";
            }
            echo "/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <link rel=\"canonical\" href=\"";
        // line 22
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(), "method");
        echo "\">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,latin-ext' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,600&amp;subset=latin,latin-ext' rel='stylesheet'>

    ";
        // line 26
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css"), "method");
        // line 27
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/vendor/normalizeb146.css"), "method");
        // line 28
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/vendor/foundation.minb146.css"), "method");
        // line 29
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/styleb146.css"), "method");
        // line 30
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/postb146.css"), "method");
        // line 31
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/vendor/modernizrb146.js"), "method");
        // line 32
        echo "

    ";
        // line 34
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    <!-- Icons -->
    <!-- 16x16 -->
    <link rel=\"shortcut icon\" href=\"";
        // line 38
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.ico\">
    <!-- 32x32 -->
    <link rel=\"shortcut icon\" href=\"";
        // line 40
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/logo.png\">
    <!-- 57x57 (precomposed) for iPhone 3GS, pre-2011 iPod Touch and older Android devices -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 42
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/apple-touch-icon-precomposed.png\">
    <!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 44
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/apple-touch-icon-72x72-precomposed.png\">
    <!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and post-2011 iPod Touch -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 46
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/apple-touch-icon-114x114-precomposed.png\">
    <!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 48
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/apple-touch-icon-144x144-precomposed.png\">
</head>
";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "    ";
        $context["home"] = $this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "find", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "home", array()), "alias", array())), "method");
        // line 54
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 72
        echo "
        ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "
        ";
        // line 77
        $this->displayBlock('footer', $context, $blocks);
        // line 80
        echo "
        ";
        // line 81
        $this->loadTemplate("partials/scripts.html.twig", "partials/base.html.twig", 81)->display($context);
        // line 82
        echo "    </body>
    </html>
";
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        // line 51
        echo "    <body class=\"home-template\" itemscope itemtype=\"http://schema.org/WebPage\">
    ";
    }

    // line 54
    public function block_header($context, array $blocks = array())
    {
        // line 55
        echo "            <header class=\"summer-site-head\">
                <div class=\"summer-site-head-menu\">
                    <a class=\"summer-blog-logo\" href=\"";
        // line 57
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\"><img src=\"";
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array());
        echo "\" alt=\"Blog Logo\" /></a>
                    ";
        // line 58
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 58)->display($context);
        // line 59
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"summer-site-head-content\" >
                    <div class=\"summer-site-head-bg\"></div>
                    <h1 class=\"summer-blog-title\">
                        <span class=\"summer-site-head-title-bg\">
                            ";
        // line 65
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "
                        </span>
                    </h1>
                    <h2 class=\"summer-blog-description\">";
        // line 68
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
        echo "</h2>
                </div>
            </header>
        ";
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
        // line 74
        echo "            ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        ";
    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        // line 78
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 78)->display($context);
        // line 79
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 79,  245 => 78,  242 => 77,  235 => 74,  232 => 73,  224 => 68,  218 => 65,  210 => 59,  208 => 58,  201 => 57,  197 => 55,  194 => 54,  189 => 51,  186 => 50,  180 => 82,  178 => 81,  175 => 80,  173 => 77,  170 => 76,  168 => 73,  165 => 72,  162 => 54,  159 => 53,  157 => 50,  152 => 48,  147 => 46,  142 => 44,  137 => 42,  132 => 40,  127 => 38,  120 => 34,  116 => 32,  113 => 31,  110 => 30,  107 => 29,  104 => 28,  101 => 27,  99 => 26,  92 => 22,  89 => 21,  56 => 19,  52 => 18,  42 => 11,  34 => 10,  23 => 1,);
    }
}
