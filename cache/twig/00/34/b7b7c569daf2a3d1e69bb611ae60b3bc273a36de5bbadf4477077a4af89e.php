<?php

/* post.html.twig */
class __TwigTemplate_0034b7b7c569daf2a3d1e69bb611ae60b3bc273a36de5bbadf4477077a4af89e extends Twig_Template
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
        $this->loadTemplate("post.html.twig", "post.html.twig", 1, "1198574585")->display($context);
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* post.html.twig */
class __TwigTemplate_0034b7b7c569daf2a3d1e69bb611ae60b3bc273a36de5bbadf4477077a4af89e_1198574585 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "post.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<body class=\"post-template\" itemscope itemtype=\"http://schema.org/WebPage\">
";
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo " <main id=\"summer-post-container\" class=\"summer-post-container intro-effect-sliced\" role=\"main\">
  <header class=\"summer-post-header\">
    <div class=\"bg-img\"></div>
    <div class=\"summer-post-menu-header\">
      <a class=\"summer-blog-logo\" href=\"";
        // line 13
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">
        <img src=\"";
        // line 14
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array());
        echo "\" alt=\"Blog Logo\" />
      </a>
      ";
        // line 16
        $this->loadTemplate("partials/navigation.html.twig", "post.html.twig", 16)->display($context);
        // line 17
        echo "    </div>
    <div class=\"summer-post-title bg-check\">
      <h1>";
        // line 19
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
      <p>a ";
        // line 20
        echo call_user_func_array($this->env->getFilter('reading_time')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), array("format" => "{minutes_short_count}")));
        echo " minute read by <strong>";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "name", array());
        echo "</strong> &#8212; on ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo "<a href=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array());
            echo "/tags/index.html#";
            echo $context["tag"];
            echo "\" data-toggle=\"tooltip\" title=\"Posts tagged with ";
            echo $context["tag"];
            echo "\" rel=\"tag\">";
            echo $context["tag"];
            echo "</a>";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo "&nbsp;&comma;&nbsp;";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " <strong><time datetime=\"";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_long", array()));
        echo "\">";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", array()), "d M Y");
        echo "</time></strong></p>
    </div>
    <div class=\"bg-img\"></div>
  </header>

  <button class=\"trigger bg-check\" data-info=\"Read more\"><span>Trigger</span></button>

  ";
        // line 27
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array())) {
            echo "<img src=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image", array()), array(), "array"), "url", array());
            echo "\" alt=\"cover-image\" />";
        }
        // line 28
        echo "
    <article class=\"summer-post-content post\">
      <div>
        ";
        // line 31
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
      </div>
    </article>
    <div class=\"cf\"></div>
    <br />

    ";
        // line 37
        $this->loadTemplate("partials/footer.html.twig", "post.html.twig", 37)->display($context);
        // line 38
        echo "    <div class=\"cf\"></div>
  </main> 
";
    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 42,  182 => 38,  180 => 37,  171 => 31,  166 => 28,  160 => 27,  103 => 20,  99 => 19,  95 => 17,  93 => 16,  87 => 14,  83 => 13,  77 => 9,  74 => 8,  69 => 6,  64 => 4,  61 => 3,  19 => 1,);
    }
}
