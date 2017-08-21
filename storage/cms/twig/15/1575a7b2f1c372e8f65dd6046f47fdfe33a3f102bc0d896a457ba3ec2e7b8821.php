<?php

/* /Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/pages/programok.htm */
class __TwigTemplate_c7dd3f46763c53648e6c661c83ff1911ff48e7ab873a68286327a20040f05624 extends Twig_Template
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
        echo "<div class=\"row row-side-padding row-bottom-zero-margin\">
    <div class=\"col s12\">
        <!-- <h1 class=\"page-title center\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h1> -->
    </div><!-- col-s12 -->
</div><!-- row row-side-padding -->

<!-- CONTENT -->
<div class=\"row row-side-padding\">
    <!-- HÍREK CONTENT -->
    <div class=\"col s12 m8\">

    <h1 class=\"page-title center\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>

    <!-- TABS -->
    <div class=\"row\">
        <div class=\"col s12\">
            <ul class=\"tabs\">
                <li class=\"tab col s12 m6\"><a class=\"active\" href=\"#free\">Ingyenes programok</a></li>
                <li class=\"tab col s12 m6\"><a href=\"#pay\">Fizetős programok</a></li>
            </ul>
        </div>

        <!-- INGYENES -->
        <div id=\"free\" class=\"col s12\">
            <ul class=\"program-content\">
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["frees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["free"]) {
            // line 27
            echo "                    <h2 class=\"program-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["free"], "title_free", array()), "html", null, true);
            echo "</h2>
                    <div class=\"program-wrapper\">
                        <ul class=\"program-list\">
                            <li>
                                <p>Pedagógus: <span>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["free"], "pedagogus", array()), "html", null, true);
            echo "</span></p>
                            </li>
                            <li>
                                <p>Dátum: <span>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["free"], "datum", array()), "html", null, true);
            echo "</span></p>
                            </li>
                            <li>
                                <p>Időpont: <span>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["free"], "ido", array()), "html", null, true);
            echo "</span></p>
                            </li>
                        </ul><!-- program-list -->
                    </div><!-- program-wrapper -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['free'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </ul>
        
        </div>
        <!-- INGYENES -->


        <!-- FIZETŐS -->
        <div id=\"pay\" class=\"col s12\">
            <ul class=\"program-content\">
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pays"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pay"]) {
            // line 52
            echo "                    <h2 class=\"program-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pay"], "title_pays", array()), "html", null, true);
            echo "</h2>
                    <div class=\"program-wrapper\">
                        <ul class=\"program-list\">
                            <li>
                                <p>Pedagógus: <span>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["pay"], "pedagogus", array()), "html", null, true);
            echo "</span></p>
                            </li>
                            <li>
                                <p>Dátum: <span>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["pay"], "datum", array()), "html", null, true);
            echo "</span></p>
                            </li>
                            <li>
                                <p>Időpont: <span>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["pay"], "ido", array()), "html", null, true);
            echo "</span></p>
                            </li>
                            <li>
                                <p>Ár: <span>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["pay"], "price", array()), "html", null, true);
            echo " Ft</span></p>
                            </li>
                             <li>
                                <p>Fizetési határidő: <span>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["pay"], "fiz_hatarido", array()), "html", null, true);
            echo "</span></p>
                            </li>
                        </ul><!-- program-list -->
                    </div><!-- program-wrapper -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            </ul>
        
        </div>
        <!-- FIZETŐS -->
    </div><!-- ROW -->
    <!-- TABS -->
    




    </div><!-- col s12 m8 -->

    <!-- SIDEBAR -->
    <div class=\"col s12 m4 margin-top30\">
        ";
        // line 88
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sidebar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 89
        echo "    </div><!-- col s12 m4 -->
</div><!-- row row-side-padding -->

<!-- CONTENT -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/pages/programok.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 89,  162 => 88,  145 => 73,  134 => 68,  128 => 65,  122 => 62,  116 => 59,  110 => 56,  102 => 52,  98 => 51,  87 => 42,  76 => 37,  70 => 34,  64 => 31,  56 => 27,  52 => 26,  35 => 12,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row row-side-padding row-bottom-zero-margin\">
    <div class=\"col s12\">
        <!-- <h1 class=\"page-title center\">{{ this.page.title }}</h1> -->
    </div><!-- col-s12 -->
</div><!-- row row-side-padding -->

<!-- CONTENT -->
<div class=\"row row-side-padding\">
    <!-- HÍREK CONTENT -->
    <div class=\"col s12 m8\">

    <h1 class=\"page-title center\">{{ this.page.title }}</h1>

    <!-- TABS -->
    <div class=\"row\">
        <div class=\"col s12\">
            <ul class=\"tabs\">
                <li class=\"tab col s12 m6\"><a class=\"active\" href=\"#free\">Ingyenes programok</a></li>
                <li class=\"tab col s12 m6\"><a href=\"#pay\">Fizetős programok</a></li>
            </ul>
        </div>

        <!-- INGYENES -->
        <div id=\"free\" class=\"col s12\">
            <ul class=\"program-content\">
                {% for free in frees %}
                    <h2 class=\"program-title\">{{ free.title_free }}</h2>
                    <div class=\"program-wrapper\">
                        <ul class=\"program-list\">
                            <li>
                                <p>Pedagógus: <span>{{ free.pedagogus }}</span></p>
                            </li>
                            <li>
                                <p>Dátum: <span>{{ free.datum }}</span></p>
                            </li>
                            <li>
                                <p>Időpont: <span>{{ free.ido }}</span></p>
                            </li>
                        </ul><!-- program-list -->
                    </div><!-- program-wrapper -->
                {% endfor %}
            </ul>
        
        </div>
        <!-- INGYENES -->


        <!-- FIZETŐS -->
        <div id=\"pay\" class=\"col s12\">
            <ul class=\"program-content\">
                {% for pay in pays %}
                    <h2 class=\"program-title\">{{ pay.title_pays }}</h2>
                    <div class=\"program-wrapper\">
                        <ul class=\"program-list\">
                            <li>
                                <p>Pedagógus: <span>{{ pay.pedagogus }}</span></p>
                            </li>
                            <li>
                                <p>Dátum: <span>{{ pay.datum }}</span></p>
                            </li>
                            <li>
                                <p>Időpont: <span>{{ pay.ido }}</span></p>
                            </li>
                            <li>
                                <p>Ár: <span>{{ pay.price }} Ft</span></p>
                            </li>
                             <li>
                                <p>Fizetési határidő: <span>{{ pay.fiz_hatarido }}</span></p>
                            </li>
                        </ul><!-- program-list -->
                    </div><!-- program-wrapper -->
                {% endfor %}
            </ul>
        
        </div>
        <!-- FIZETŐS -->
    </div><!-- ROW -->
    <!-- TABS -->
    




    </div><!-- col s12 m8 -->

    <!-- SIDEBAR -->
    <div class=\"col s12 m4 margin-top30\">
        {% partial 'sidebar' %}
    </div><!-- col s12 m4 -->
</div><!-- row row-side-padding -->

<!-- CONTENT -->", "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/pages/programok.htm", "");
    }
}
