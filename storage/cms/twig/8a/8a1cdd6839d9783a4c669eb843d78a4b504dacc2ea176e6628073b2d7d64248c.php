<?php

/* /Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/galleryArchive/default.htm */
class __TwigTemplate_8903c469eb39ea0785c907ba3f3a9eab9a0d4f27a274ceeca30db56b431f6596 extends Twig_Template
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
        $context["posts"] = $this->getAttribute(($context["galleryArchive"] ?? null), "posts", array());
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
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\">
                    <p>
                        <img
                            class=\"hoverable\"
                            data-src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                echo "\"
                            src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                echo "\"
                            alt=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                echo "\"
                            style=\"max-width: 100%\" />
                    </p>
                </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            </div>

<!-- EXCERPT -->
            <p class=\"excerpt\">";
            // line 25
            echo $this->getAttribute($context["post"], "summary", array());
            echo "</p>

<!-- INFO BAR -->
            <div class=\"blog-info-bar\">
                <i class=\"material-icons\">person</i>
                <p class=\"info\">
                     ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "first_name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "last_name", array()), "html", null, true);
            echo "
                </p>
                    <!-- ";
            // line 33
            if ($this->getAttribute($this->getAttribute($context["post"], "categories", array()), "count", array())) {
                echo " in ";
            }
            // line 34
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
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
                // line 35
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 36
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
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "Y.m.d."), "html", null, true);
            echo "
                </p>
            </div><!-- blog-info-bar -->

        </li>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
</ul>

";
        // line 52
        if (($this->getAttribute(($context["posts"] ?? null), "lastPage", array()) > 1)) {
            // line 53
            echo "    <ul class=\"pagination\">
        ";
            // line 54
            if (($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) > 1)) {
                // line 55
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 57
            echo "
        ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute(($context["posts"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 59
                echo "            <li class=\"";
                echo ((($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 60
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
            // line 63
            echo "
        ";
            // line 64
            if (($this->getAttribute(($context["posts"] ?? null), "lastPage", array()) > $this->getAttribute(($context["posts"] ?? null), "currentPage", array()))) {
                // line 65
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => ($this->getAttribute(($context["posts"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 67
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/galleryArchive/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 67,  211 => 65,  209 => 64,  206 => 63,  195 => 60,  190 => 59,  186 => 58,  183 => 57,  177 => 55,  175 => 54,  172 => 53,  170 => 52,  165 => 49,  156 => 47,  144 => 40,  125 => 36,  116 => 35,  98 => 34,  94 => 33,  87 => 31,  78 => 25,  73 => 22,  62 => 17,  58 => 16,  54 => 15,  46 => 11,  42 => 10,  33 => 6,  30 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = galleryArchive.posts %}

<ul class=\"post-list\">
    {% for post in posts %}
        <li>
            <h2 class=\"post-title\"><a href=\"{{ post.url }}\">{{ post.title }}</a></h2>

<!-- FEAT IMAGE-->
            <div class=\"featured-images text-center\">
                {% for image in post.featured_images %}
                <a href=\"{{ post.url }}\">
                    <p>
                        <img
                            class=\"hoverable\"
                            data-src=\"{{ image.filename }}\"
                            src=\"{{ image.path }}\"
                            alt=\"{{ image.description }}\"
                            style=\"max-width: 100%\" />
                    </p>
                </a>
                {% endfor %}
            </div>

<!-- EXCERPT -->
            <p class=\"excerpt\">{{ post.summary|raw }}</p>

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
            </div><!-- blog-info-bar -->

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
{% endif %}", "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/galleryArchive/default.htm", "");
    }
}
