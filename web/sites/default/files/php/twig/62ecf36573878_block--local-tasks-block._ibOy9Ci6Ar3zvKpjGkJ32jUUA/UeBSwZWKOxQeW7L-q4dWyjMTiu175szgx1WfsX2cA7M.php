<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/radix/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_f1f24f4f4a14dfe33368ee573b1bdfb7fa45352031dabc0add1a85e9cd9cf063 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        $this->loadTemplate("@radix/block/block.twig", "themes/contrib/radix/templates/block/block--local-tasks-block.html.twig", 7)->display(twig_array_merge($context, ["html_tag" => "div", "utility_classes" => [0 => "my-3"]]));
    }

    public function getTemplateName()
    {
        return "themes/contrib/radix/templates/block/block--local-tasks-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/radix/templates/block/block--local-tasks-block.html.twig", "C:\\xampp\\htdocs\\ss_apigee_dev_portal_9_4_5\\web\\themes\\contrib\\radix\\templates\\block\\block--local-tasks-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 7);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
