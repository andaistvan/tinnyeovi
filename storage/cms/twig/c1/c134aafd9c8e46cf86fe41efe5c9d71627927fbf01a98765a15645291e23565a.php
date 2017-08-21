<?php

/* /Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/all-pages/styleguide.htm */
class __TwigTemplate_98e959852554113f134d11f64bcc606c253315e14afc231ea2976922ac6f9463 extends Twig_Template
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
        echo "<div class=\"col s12\">
    <div class=\"aw-styleguide-buttons fixed-action-btn horizontal\">
    <a class=\"btn-floating btn-large\">
        <i class=\"large material-icons\">thumb_up</i>
    </a>
        <ul>
            <li>
                <a class=\"btn-floating \$secondary-color-dark\" href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("styleguide/styleguide");
        echo "\"><i class=\"material-icons\">mode_edit</i></a>
            </li>
            <li>
                <a class=\"btn-floating \$secondary-color-dark\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("styleguide/text-blocks");
        echo "\"><i class=\"material-icons\">web</i></a>
            </li>
            <li>
                <a class=\"btn-floating \$secondary-color-dark\" href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("styleguide/navbars");
        echo "\" target=\"_blank\"><i class=\"material-icons\">navigation</i></a>
            </li>
            <li>
                <a class=\"btn-floating \$secondary-color-dark\" href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("styleguide/cards");
        echo "\" target=\"_blank\"><i class=\"material-icons\">credit_card</i></a>
            </li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/all-pages/styleguide.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  40 => 14,  34 => 11,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col s12\">
    <div class=\"aw-styleguide-buttons fixed-action-btn horizontal\">
    <a class=\"btn-floating btn-large\">
        <i class=\"large material-icons\">thumb_up</i>
    </a>
        <ul>
            <li>
                <a class=\"btn-floating \$secondary-color-dark\" href=\"{{ 'styleguide/styleguide'|page }}\"><i class=\"material-icons\">mode_edit</i></a>
            </li>
            <li>
                <a class=\"btn-floating \$secondary-color-dark\" href=\"{{ 'styleguide/text-blocks'|page }}\"><i class=\"material-icons\">web</i></a>
            </li>
            <li>
                <a class=\"btn-floating \$secondary-color-dark\" href=\"{{ 'styleguide/navbars'|page }}\" target=\"_blank\"><i class=\"material-icons\">navigation</i></a>
            </li>
            <li>
                <a class=\"btn-floating \$secondary-color-dark\" href=\"{{ 'styleguide/cards'|page }}\" target=\"_blank\"><i class=\"material-icons\">credit_card</i></a>
            </li>
        </ul>
    </div>
</div>", "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/all-pages/styleguide.htm", "");
    }
}
