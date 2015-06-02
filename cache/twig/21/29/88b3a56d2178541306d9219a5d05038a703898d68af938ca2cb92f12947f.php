<?php

/* categories.html.twig */
class __TwigTemplate_212988b3a56d2178541306d9219a5d05038a703898d68af938ca2cb92f12947f extends Twig_Template
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
        $this->loadTemplate("categories.html.twig", "categories.html.twig", 1, "1263589388")->display($context);
    }

    public function getTemplateName()
    {
        return "categories.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* categories.html.twig */
class __TwigTemplate_212988b3a56d2178541306d9219a5d05038a703898d68af938ca2cb92f12947f_1263589388 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "categories.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<body class=\"post-template page\" itemscope itemtype=\"http://schema.org/WebPage\">
";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <main id=\"summer-page-container\" class=\"summer-page-container\" role=\"main\">
        <header class=\"summer-page-header\">
            <div class=\"summer-page-menu-header\">
                <a class=\"summer-blog-logo\" href=\"";
        // line 11
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">
                    <img src=\"";
        // line 12
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array());
        echo "\" alt=\"Blog Logo\" />
                </a>

                ";
        // line 15
        $this->loadTemplate("partials/navigation.html.twig", "categories.html.twig", 15)->display($context);
        // line 16
        echo "            </div>
            <div class=\"summer-page-title row\">
                <div class=\"small-12 columns\">
                    <h1>";
        // line 19
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
                </div>
            </div>
        </header>
        <article class=\"summer-page-content\">
        <div>
          ";
        // line 25
        $context["tags"] = $this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "taxonomy", array()), "tag", array(), "array");
        // line 26
        echo "
            <ul class=\"tag-box inline\">
              ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        foreach ($context['_seq'] as $context["tag"] => $context["items"]) {
            // line 29
            echo "                <li><a href=\"#";
            echo $context["tag"];
            echo "\">";
            echo $context["tag"];
            echo " <span>";
            echo twig_length_filter($this->env, $context["items"]);
            echo "</span></a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </ul>

            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        foreach ($context['_seq'] as $context["tag"] => $context["items"]) {
            // line 34
            echo "              <article>
                <h2 id=\"";
            // line 35
            echo $context["tag"];
            echo "\">";
            echo $context["tag"];
            echo "</h2>
                <ul class=\"post-list\">
                  ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["items"]);
            foreach ($context['_seq'] as $context["path"] => $context["slug"]) {
                // line 38
                echo "                    ";
                $context["post"] = $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "pages", array(), "array"), "get", array(0 => $context["path"]), "method");
                // line 39
                echo "                      ";
                if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()) != null)) {
                    // line 40
                    echo "                        <li><a href=\"";
                    echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url", array());
                    echo "\" title=\"";
                    echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array());
                    echo "\">";
                    echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array());
                    echo "<span class=\"entry-date\"><time datetime=\"";
                    echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_long", array()));
                    echo "\">";
                    echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", array()), "d M Y");
                    echo "</time></a></li>
                      ";
                }
                // line 42
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['slug'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                  </ul>
                </article><!-- /.hentry -->
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
            </div>
          </article>
          <div class=\"cf\"></div>
          ";
        // line 50
        $this->loadTemplate("partials/footer.html.twig", "categories.html.twig", 50)->display($context);
        // line 51
        echo "      </main>
";
    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 53,  196 => 51,  194 => 50,  188 => 46,  180 => 43,  174 => 42,  160 => 40,  157 => 39,  154 => 38,  150 => 37,  143 => 35,  140 => 34,  136 => 33,  132 => 31,  119 => 29,  115 => 28,  111 => 26,  109 => 25,  100 => 19,  95 => 16,  93 => 15,  86 => 12,  82 => 11,  77 => 8,  74 => 7,  69 => 5,  64 => 3,  61 => 2,  19 => 1,);
    }
}
