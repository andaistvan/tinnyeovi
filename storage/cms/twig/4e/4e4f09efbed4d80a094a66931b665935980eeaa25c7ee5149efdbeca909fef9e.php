<?php

/* /Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/blogNews/News.htm */
class __TwigTemplate_89dcedefe75fe3a394a2c6aa1ebc5d2e5670343d34185e9d1481cc04caaeaaaf extends Twig_Template
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
        $context["posts"] = $this->getAttribute(($context["blogNews"] ?? null), "posts", array());
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
            <h2 class=\"post-title\"><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h2>

<!-- FEAT IMAGE-->
            <div class=\"featured-images text-center\">
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "featured_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 11
                echo "                    <p>
                        <img
                            data-src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                echo "\"
                            src=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                echo "\"
                            alt=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                echo "\"
                            style=\"max-width: 100%\" />
                    </p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            </div>

<!-- EXCERPT -->
            <p class=\"excerpt\">";
            // line 22
            echo $this->getAttribute($context["post"], "summary", array());
            echo "</p>
            
<!-- INFO BAR -->
           <!-- <div class=\"blog-info-bar\">
                <i class=\"material-icons\">person</i>
                <p class=\"info\">
                     ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "first_name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "last_name", array()), "html", null, true);
            echo "
                </p>
                    
                <i class=\"material-icons\">date_range</i>
                <p class=\"info\">
                    ";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "Y.m.d."), "html", null, true);
            echo "
                </p>
            </div> -->
            <!-- blog-info-bar -->

        </li>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
</ul>

";
        // line 46
        if (($this->getAttribute(($context["posts"] ?? null), "lastPage", array()) > 1)) {
            // line 47
            echo "    <ul class=\"pagination\">
        ";
            // line 48
            if (($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) > 1)) {
                // line 49
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 51
            echo "
        ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute(($context["posts"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 53
                echo "            <li class=\"";
                echo ((($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 54
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
        ";
            // line 58
            if (($this->getAttribute(($context["posts"] ?? null), "lastPage", array()) > $this->getAttribute(($context["posts"] ?? null), "currentPage", array()))) {
                // line 59
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 61
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/blogNews/News.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 61,  160 => 59,  158 => 58,  155 => 57,  144 => 54,  139 => 53,  135 => 52,  132 => 51,  126 => 49,  124 => 48,  121 => 47,  119 => 46,  114 => 43,  105 => 41,  92 => 33,  82 => 28,  73 => 22,  68 => 19,  58 => 15,  54 => 14,  50 => 13,  46 => 11,  42 => 10,  33 => 6,  30 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = blogNews.posts %}

<ul class=\"post-list\">
    {% for post in posts %}
        <li>
            <h2 class=\"post-title\"><a href=\"{{ post.url }}\">{{ post.title }}</a></h2>

<!-- FEAT IMAGE-->
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

<!-- EXCERPT -->
            <p class=\"excerpt\">{{ post.summary|raw }}</p>
            
<!-- INFO BAR -->
           <!-- <div class=\"blog-info-bar\">
                <i class=\"material-icons\">person</i>
                <p class=\"info\">
                     {{ post.user.first_name }} {{ post.user.last_name }}
                </p>
                    
                <i class=\"material-icons\">date_range</i>
                <p class=\"info\">
                    {{ post.published_at|date('Y.m.d.') }}
                </p>
            </div> -->
            <!-- blog-info-bar -->

        </li>

    {% else %}
        <li class=\"no-data\">{{ noPostsMessage }}</li>
    {% endfor %}

</ul>

{% if posts.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if posts.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..posts.lastPage %}
            <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if posts.lastPage > posts.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}", "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/blogNews/News.htm", "");
    }
}
