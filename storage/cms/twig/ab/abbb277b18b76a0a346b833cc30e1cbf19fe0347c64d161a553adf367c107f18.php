<?php

/* /Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/singleNews/singlenews.htm */
class __TwigTemplate_4d28eb0aa5f7274856a28c71c1ab82d371a5ce2cc0c8147d6bb6208447d3b37d extends Twig_Template
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
        $context["post"] = $this->getAttribute(($context["singleNews"] ?? null), "post", array());
        // line 2
        echo "
<h2 class=\"post-title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h2>



";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "featured_images", array()), "count", array())) {
            // line 8
            echo "    <div class=\"featured-images text-center\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? null), "featured_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 10
                echo "            <p>
                <img
                    data-src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                echo "\"
                    src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                echo "\"
                    alt=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                echo "\"
                    style=\"max-width: 100%\" />
            </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </div>
";
        }
        // line 20
        echo "
<div class=\"content\">";
        // line 21
        echo $this->getAttribute(($context["post"] ?? null), "content_html", array());
        echo "</div>

<!-- INFO BAR -->
            <div class=\"blog-info-bar\">
                <i class=\"material-icons\">person</i>
                <p class=\"info\">
                     ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "user", array()), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "user", array()), "last_name", array()), "html", null, true);
        echo "
                </p>
                    <!-- ";
        // line 29
        if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "categories", array()), "count", array())) {
            echo " in ";
        }
        // line 30
        echo "                    ";
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
            // line 31
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ", ";
            }
            // line 32
            echo "                    ";
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
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "published_at", array()), "Y.m.d."), "html", null, true);
        echo "
                </p>
            </div><!-- blog-info-bar -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/singleNews/singlenews.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 36,  116 => 32,  107 => 31,  89 => 30,  85 => 29,  78 => 27,  69 => 21,  66 => 20,  62 => 18,  52 => 14,  48 => 13,  44 => 12,  40 => 10,  36 => 9,  33 => 8,  31 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set post = singleNews.post %}

<h2 class=\"post-title\">{{ post.title }}</h2>



{% if post.featured_images.count %}
    <div class=\"featured-images text-center\">
        {% for image in post.featured_images %}
            <p>
                <img
                    data-src=\"{{ image.filename }}\"
                    src=\"{{ image.path }}\"
                    alt=\"{{ image.description }}\"
                    style=\"max-width: 100%\" />
            </p>
        {% endfor %}
    </div>
{% endif %}

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
            </div><!-- blog-info-bar -->", "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/singleNews/singlenews.htm", "");
    }
}
