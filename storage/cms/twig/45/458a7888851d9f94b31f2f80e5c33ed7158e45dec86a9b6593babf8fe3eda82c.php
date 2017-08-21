<?php

/* /Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/sidebarPosts/sidebarposts.htm */
class __TwigTemplate_620a3ba6bf37bd75ad3960e6c4b92f148743f7e31dce3829f72c505ad23fe11c extends Twig_Template
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
        $context["posts"] = $this->getAttribute(($context["sidebarPosts"] ?? null), "posts", array());
        // line 2
        echo "
<ul class=\"post-list\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "        <li>
            <h4 class=\"sidebar-list\"><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h4>
        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 9
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/sidebarPosts/sidebarposts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  43 => 9,  33 => 6,  30 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = sidebarPosts.posts %}

<ul class=\"post-list\">
    {% for post in posts %}
        <li>
            <h4 class=\"sidebar-list\"><a href=\"{{ post.url }}\">{{ post.title }}</a></h4>
        </li>
    {% else %}
        <li class=\"no-data\">{{ noPostsMessage }}</li>
    {% endfor %}
</ul>", "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/sidebarPosts/sidebarposts.htm", "");
    }
}
