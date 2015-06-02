<?php

/* partials/scripts.html.twig */
class __TwigTemplate_83a3fe7e1cb66e56a98ce1603d5cee536c6c00597d81a9fabda1982c3e006cf2 extends Twig_Template
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
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 2
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/vendor/fastclickb146.js"), "method");
        // line 3
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/vendor/foundation.minb146.js"), "method");
        // line 4
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/vendor/background-checkb146.js"), "method");
        // line 5
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/vendor/post-header-animationsb146.js"), "method");
        // line 6
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/summerb146.js"), "method");
        // line 7
        echo "
";
        // line 8
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

<script type=\"text/javascript\" src=\"http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML\"></script>
<script>
MathJax.Hub.Config({
    config: [\"MMLorHTML.js\"],
    extensions: [\"tex2jax.js\",\"TeX/AMSmath.js\",\"TeX/AMSsymbols.js\"],
    jax: [\"input/TeX\"],
    tex2jax: {
        inlineMath: [ ['\$','\$'], [\"\\\\(\",\"\\\\)\"] ],
        displayMath: [ ['\$\$','\$\$'], [\"\\\\[\",\"\\\\]\"] ],
        processEscapes: false
    },
    TeX: {
        TagSide: \"right\",
        TagIndent: \".8em\",
        MultLineWidth: \"85%\",
        equationNumbers: {
           autoNumber: \"AMS\",
       },
       unicode: {
           fonts: \"STIXGeneral,'Arial Unicode MS'\" 
       }
   },
   showProcessingMessages: false
});
</script>


";
    }

    public function getTemplateName()
    {
        return "partials/scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
