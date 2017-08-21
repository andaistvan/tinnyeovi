<?php

/* /Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/sidebar.htm */
class __TwigTemplate_11ef96541c1d159722157051f1d3caf06a3159473821e90cd5bfde34ff265426 extends Twig_Template
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
        echo "<div id=\"sidebar-wrapper\">

    <div class=\"sidebar-section\">
        <h3 class=\"sidebar-title\">Legutóbbi hírek</h3>
        ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("sidebarPosts::sidebarposts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "    </div><!-- sidebar-section -->

    <div class=\"sidebar-section\">
        <h3 class=\"sidebar-title\">Napirend</h3>
        <ul class=\"napirend\">
            <li>
                <p><span>Gyülekező:</span> 8:30</p>
            </li>
            <li>
                <p><span>Ebéd:</span> 12:00</p>
            </li>
            <li>
                <p><span>Csendes pihenő:</span> 13:00 - 15:00</p>
            </li>
        </ul>

    </div><!-- sidebar-section -->

    <div class=\"sidebar-section\">
        <h3 class=\"sidebar-title\">Hasznos linkek</h3>
        <ul class=\"hasznos-linkek\">
            <li>
                <a href=\"http://tinnye.hu\">Tinnye honlapja</a>
            </li>
            <li>
                <a href=\"#\">Cédrus Tánceggyüttes</a>
            </li>
            <li>
                <a href=\"http://tinnye.hu\">Zeneovi képek</a>
            </li>
        </ul>
    </div><!-- sidebar-section -->

</div> <!-- sidebar-wrapper -->";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sidebar-wrapper\">

    <div class=\"sidebar-section\">
        <h3 class=\"sidebar-title\">Legutóbbi hírek</h3>
        {% component 'sidebarPosts::sidebarposts' %}
    </div><!-- sidebar-section -->

    <div class=\"sidebar-section\">
        <h3 class=\"sidebar-title\">Napirend</h3>
        <ul class=\"napirend\">
            <li>
                <p><span>Gyülekező:</span> 8:30</p>
            </li>
            <li>
                <p><span>Ebéd:</span> 12:00</p>
            </li>
            <li>
                <p><span>Csendes pihenő:</span> 13:00 - 15:00</p>
            </li>
        </ul>

    </div><!-- sidebar-section -->

    <div class=\"sidebar-section\">
        <h3 class=\"sidebar-title\">Hasznos linkek</h3>
        <ul class=\"hasznos-linkek\">
            <li>
                <a href=\"http://tinnye.hu\">Tinnye honlapja</a>
            </li>
            <li>
                <a href=\"#\">Cédrus Tánceggyüttes</a>
            </li>
            <li>
                <a href=\"http://tinnye.hu\">Zeneovi képek</a>
            </li>
        </ul>
    </div><!-- sidebar-section -->

</div> <!-- sidebar-wrapper -->", "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/sidebar.htm", "");
    }
}
