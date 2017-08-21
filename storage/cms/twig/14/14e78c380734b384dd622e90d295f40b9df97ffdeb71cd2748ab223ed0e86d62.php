<?php

/* /Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/all-pages/header.htm */
class __TwigTemplate_8e4a565498921b148c4b0c2ffc248938c85270202a4f9edd05192d6c951ed386 extends Twig_Template
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
        echo "<!-- PARENT: header#layout-header -->
<div class=\"container\">
    <div id=\"header-topbar\">
        <!-- BRANDING BOX -->
        <div class=\"branding-box left\">
            <a href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("hirek/kezdolap");
        echo "\" class=\"brand-logo\">
                Tengerszem <span>óvóda</span>
            </a>
        </div><!--  branding-box-->
        <!-- WELCOME TEXT -->
        <div class=\"welcome-text right hide-on-med-and-down\">
            <p class=\"welcome\">Sok szeretettel várunk<br>minden kedves gyereket!</p>
        </div><!-- welcome-text -->

        <!-- MOBIL TOGGLE -->
        <div class=\"mobil-toggle-cont hide-on-large-only right\">
            <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\"><i class=\"material-icons\">menu</i><p class=\"toggle-text\">MENÜ</p></a>
            <div class=\"clear\"></div>
        </div><!-- mobil-toggle-cont -->

        <!-- MOBIL NAVIGATION -->
        <ul id=\"slide-out\" class=\"side-nav\">
            <li class=\"";
        // line 23
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "kezdolap")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("hirek/kezdolap");
        echo "\">Főoldal</a></li>
            <li class=\"";
        // line 24
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "bemutatkozas")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("bemutatkozas");
        echo "\">Bemutatkozás</a></li>
            <!-- Collapsible Accordion dedicated -->
                <ul class=\"collapsible collapsible-accordion\">
                    <li>
                        <a class=\"collapsible-header\">Csoportok<i class=\"material-icons right\">arrow_drop_down</i></a>
                        <div class=\"collapsible-body\">
                            <ul class=\"mobil-submenu\">
                                <li class=\"";
        // line 31
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "suni-csoport")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("csoportok/suni-csoport");
        echo "\">Süni</a></li>
                                <li class=\"divider divider-nav\"></li>
                                <li class=\"";
        // line 33
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "ozike-csoport")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("csoportok/ozike-csoport");
        echo "\">Őzike</a></li>
                                <li class=\"divider divider-nav\"></li>
                                <li class=\"";
        // line 35
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "nyuszi-csoport")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("csoportok/nyuszi-csoport");
        echo "\">Nyuszi</a></li>
                                <li class=\"divider divider-nav\"></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            <!-- Collapsible Accordion dedicated -->
            <li class=\"";
        // line 42
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "dokumentumok")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("dokumentumok");
        echo "\">Dokumentumok</a></li>
            <li class=\"";
        // line 43
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "programok")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("programok");
        echo "\">Programok</a></li>
            <li class=\"";
        // line 44
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "kepgaleria")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("galeria/kepgaleria");
        echo "\">Képgaléria</a></li>
            <li class=\"";
        // line 45
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "ajanlo")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("ajanlo");
        echo "\">Ajánló</a></li>
            <li class=\"";
        // line 46
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "kapcsolat")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("kapcsolat");
        echo "\">Kapcsolat</a></li>
        </ul>
        <!-- MOBIL NAVIGATION -->
    </div><!-- header-topbar -->

    <div class=\"color-bar-cont\">
        <div class=\"color-bar bg-sec-color-light\"></div>
        <div class=\"color-bar green-t\"></div>
        <div class=\"color-bar yellow-t\"></div>
        <!-- <div class=\"color-bar\"></div> -->
        <div class=\"clear\"></div>
    </div><!-- color-bar-cont -->

    <div class=\"navigation-bar hide-on-med-and-down\">
        ";
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("all-pages/main-navigation"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "    </div>
</div><!-- container -->
<!-- TOP BAR -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/all-pages/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 61,  153 => 60,  132 => 46,  124 => 45,  116 => 44,  108 => 43,  100 => 42,  86 => 35,  77 => 33,  68 => 31,  54 => 24,  46 => 23,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- PARENT: header#layout-header -->
<div class=\"container\">
    <div id=\"header-topbar\">
        <!-- BRANDING BOX -->
        <div class=\"branding-box left\">
            <a href=\"{{ 'hirek/kezdolap'|page }}\" class=\"brand-logo\">
                Tengerszem <span>óvóda</span>
            </a>
        </div><!--  branding-box-->
        <!-- WELCOME TEXT -->
        <div class=\"welcome-text right hide-on-med-and-down\">
            <p class=\"welcome\">Sok szeretettel várunk<br>minden kedves gyereket!</p>
        </div><!-- welcome-text -->

        <!-- MOBIL TOGGLE -->
        <div class=\"mobil-toggle-cont hide-on-large-only right\">
            <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\"><i class=\"material-icons\">menu</i><p class=\"toggle-text\">MENÜ</p></a>
            <div class=\"clear\"></div>
        </div><!-- mobil-toggle-cont -->

        <!-- MOBIL NAVIGATION -->
        <ul id=\"slide-out\" class=\"side-nav\">
            <li class=\"{% if this.page.id == 'kezdolap' %}active{% endif %}\"><a href=\"{{ 'hirek/kezdolap'|page }}\">Főoldal</a></li>
            <li class=\"{% if this.page.id == 'bemutatkozas' %}active{% endif %}\"><a href=\"{{ 'bemutatkozas'|page }}\">Bemutatkozás</a></li>
            <!-- Collapsible Accordion dedicated -->
                <ul class=\"collapsible collapsible-accordion\">
                    <li>
                        <a class=\"collapsible-header\">Csoportok<i class=\"material-icons right\">arrow_drop_down</i></a>
                        <div class=\"collapsible-body\">
                            <ul class=\"mobil-submenu\">
                                <li class=\"{% if this.page.id == 'suni-csoport' %}active{% endif %}\"><a href=\"{{ 'csoportok/suni-csoport'|page }}\">Süni</a></li>
                                <li class=\"divider divider-nav\"></li>
                                <li class=\"{% if this.page.id == 'ozike-csoport' %}active{% endif %}\"><a href=\"{{ 'csoportok/ozike-csoport'|page }}\">Őzike</a></li>
                                <li class=\"divider divider-nav\"></li>
                                <li class=\"{% if this.page.id == 'nyuszi-csoport' %}active{% endif %}\"><a href=\"{{ 'csoportok/nyuszi-csoport'|page }}\">Nyuszi</a></li>
                                <li class=\"divider divider-nav\"></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            <!-- Collapsible Accordion dedicated -->
            <li class=\"{% if this.page.id == 'dokumentumok' %}active{% endif %}\"><a href=\"{{ 'dokumentumok'|page }}\">Dokumentumok</a></li>
            <li class=\"{% if this.page.id == 'programok' %}active{% endif %}\"><a href=\"{{ 'programok'|page }}\">Programok</a></li>
            <li class=\"{% if this.page.id == 'kepgaleria' %}active{% endif %}\"><a href=\"{{ 'galeria/kepgaleria'|page }}\">Képgaléria</a></li>
            <li class=\"{% if this.page.id == 'ajanlo' %}active{% endif %}\"><a href=\"{{ 'ajanlo'|page }}\">Ajánló</a></li>
            <li class=\"{% if this.page.id == 'kapcsolat' %}active{% endif %}\"><a href=\"{{ 'kapcsolat'|page }}\">Kapcsolat</a></li>
        </ul>
        <!-- MOBIL NAVIGATION -->
    </div><!-- header-topbar -->

    <div class=\"color-bar-cont\">
        <div class=\"color-bar bg-sec-color-light\"></div>
        <div class=\"color-bar green-t\"></div>
        <div class=\"color-bar yellow-t\"></div>
        <!-- <div class=\"color-bar\"></div> -->
        <div class=\"clear\"></div>
    </div><!-- color-bar-cont -->

    <div class=\"navigation-bar hide-on-med-and-down\">
        {% partial 'all-pages/main-navigation'%}
    </div>
</div><!-- container -->
<!-- TOP BAR -->", "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/all-pages/header.htm", "");
    }
}
