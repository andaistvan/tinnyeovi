<?php

/* /Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/all-pages/main-navigation.htm */
class __TwigTemplate_565f693880fb0957f2e61057668e748ccea81b88363b5c2c2db001d72e46cf56 extends Twig_Template
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
        echo "<!-- MAIN - DROPDOWN NAV -->
<ul id=\"csoportok-dd\" class=\"dropdown-content\">
    <li class=\"";
        // line 3
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "suni-csoport")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("csoportok/suni-csoport");
        echo "\">Süni</a></li>
    <li class=\"divider\"></li>
    <li class=\"";
        // line 5
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "ozike-csoport")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("csoportok/ozike-csoport");
        echo "\">Őzike</a></li>
    <li class=\"divider\"></li>
    <li class=\"";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "nyuszi-csoport")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("csoportok/nyuszi-csoport");
        echo "\">Nyuszi</a></li>
</ul>

<!-- MAIN NAVIGATION -->
<nav class=\"main-navigation\">
    <ul class=\"left\">
        <li class=\"";
        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "kezdolap")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("hirek/kezdolap");
        echo "\">Főoldal</a></li>
        <li class=\"";
        // line 14
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "bemutatkozas")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("bemutatkozas");
        echo "\">Bemutatkozás</a></li>
        <!-- Dropdown Trigger -->
        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"csoportok-dd\">Csoportok<i class=\"material-icons right\">arrow_drop_down</i></a></li>
        <!-- Dropdown Trigger -->
        <li class=\"";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "dokumentumok")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("dokumentumok");
        echo "\">Dokumentumok</a></li>
        <li class=\"";
        // line 19
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "programok")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("programok");
        echo "\">Programok</a></li>
        <li class=\"";
        // line 20
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "ajanlo")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("ajanlo");
        echo "\">Ajánló</a></li>
        <li class=\"";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "kepgaleria")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("galeria/kepgaleria");
        echo "\">Képgaléria</a></li>
        <li class=\"";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "kapcsolat")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("kapcsolat");
        echo "\">Kapcsolat</a></li>
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/all-pages/main-navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 22,  97 => 21,  89 => 20,  81 => 19,  73 => 18,  62 => 14,  54 => 13,  41 => 7,  32 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- MAIN - DROPDOWN NAV -->
<ul id=\"csoportok-dd\" class=\"dropdown-content\">
    <li class=\"{% if this.page.id == 'suni-csoport' %}active{% endif %}\"><a href=\"{{ 'csoportok/suni-csoport'|page }}\">Süni</a></li>
    <li class=\"divider\"></li>
    <li class=\"{% if this.page.id == 'ozike-csoport' %}active{% endif %}\"><a href=\"{{ 'csoportok/ozike-csoport'|page }}\">Őzike</a></li>
    <li class=\"divider\"></li>
    <li class=\"{% if this.page.id == 'nyuszi-csoport' %}active{% endif %}\"><a href=\"{{ 'csoportok/nyuszi-csoport'|page }}\">Nyuszi</a></li>
</ul>

<!-- MAIN NAVIGATION -->
<nav class=\"main-navigation\">
    <ul class=\"left\">
        <li class=\"{% if this.page.id == 'kezdolap' %}active{% endif %}\"><a href=\"{{ 'hirek/kezdolap'|page }}\">Főoldal</a></li>
        <li class=\"{% if this.page.id == 'bemutatkozas' %}active{% endif %}\"><a href=\"{{ 'bemutatkozas'|page }}\">Bemutatkozás</a></li>
        <!-- Dropdown Trigger -->
        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"csoportok-dd\">Csoportok<i class=\"material-icons right\">arrow_drop_down</i></a></li>
        <!-- Dropdown Trigger -->
        <li class=\"{% if this.page.id == 'dokumentumok' %}active{% endif %}\"><a href=\"{{ 'dokumentumok'|page }}\">Dokumentumok</a></li>
        <li class=\"{% if this.page.id == 'programok' %}active{% endif %}\"><a href=\"{{ 'programok'|page }}\">Programok</a></li>
        <li class=\"{% if this.page.id == 'ajanlo' %}active{% endif %}\"><a href=\"{{ 'ajanlo'|page }}\">Ajánló</a></li>
        <li class=\"{% if this.page.id == 'kepgaleria' %}active{% endif %}\"><a href=\"{{ 'galeria/kepgaleria'|page }}\">Képgaléria</a></li>
        <li class=\"{% if this.page.id == 'kapcsolat' %}active{% endif %}\"><a href=\"{{ 'kapcsolat'|page }}\">Kapcsolat</a></li>
    </ul>
</nav>", "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/all-pages/main-navigation.htm", "");
    }
}
