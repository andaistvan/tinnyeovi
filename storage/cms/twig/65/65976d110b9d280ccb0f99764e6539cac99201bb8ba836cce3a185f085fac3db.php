<?php

/* /Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/gallerySingle/default.htm */
class __TwigTemplate_233d2fb266228beeb1dcf871553fa1bcbf29e4b4a9a408000ae8f0822963d2a0 extends Twig_Template
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
        $context["post"] = $this->getAttribute(($context["gallerySingle"] ?? null), "post", array());
        // line 2
        echo "
<h2 class=\"post-title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h2>

<div class=\"gallery-container\">
    ";
        // line 6
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['gallery'] = $this->getAttribute(($context["post"] ?? null), "rjgallery", array())        ;
        echo $this->env->getExtension('CMS')->componentFunction("gallery"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "    <div class=\"clear\"></div>
</div><!-- gallery-container -->

<div class=\"content\">";
        // line 10
        echo $this->getAttribute(($context["post"] ?? null), "content_html", array());
        echo "</div>

<!-- INFO BAR -->
    <div class=\"blog-info-bar\">
        <i class=\"material-icons\">person</i>
        <p class=\"info\">
             ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "user", array()), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "user", array()), "last_name", array()), "html", null, true);
        echo "
        </p>
            <!-- ";
        // line 18
        if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "categories", array()), "count", array())) {
            echo " in ";
        }
        // line 19
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? null), "categories", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ", ";
            }
            // line 21
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " -->

        <i class=\"material-icons\">date_range</i>
        <p class=\"info\">
            ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "published_at", array()), "Y.m.d."), "html", null, true);
        echo "
        </p>
    </div><!-- blog-info-bar -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/gallerySingle/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 25,  87 => 21,  78 => 20,  60 => 19,  56 => 18,  49 => 16,  40 => 10,  35 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set post = gallerySingle.post %}

<h2 class=\"post-title\">{{ post.title }}</h2>

<div class=\"gallery-container\">
    {% component 'gallery' gallery=post.rjgallery %}
    <div class=\"clear\"></div>
</div><!-- gallery-container -->

<div class=\"content\">{{ post.content_html|raw }}</div>

<!-- INFO BAR -->
    <div class=\"blog-info-bar\">
        <i class=\"material-icons\">person</i>
        <p class=\"info\">
             {{ post.user.first_name }} {{ post.user.last_name }}
        </p>
            <!-- {% if post.categories.count %} in {% endif %}
            {% for category in post.categories %}
                <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
            {% endfor %} -->

        <i class=\"material-icons\">date_range</i>
        <p class=\"info\">
            {{ post.published_at|date('Y.m.d.') }}
        </p>
    </div><!-- blog-info-bar -->", "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/gallerySingle/default.htm", "");
    }
}
