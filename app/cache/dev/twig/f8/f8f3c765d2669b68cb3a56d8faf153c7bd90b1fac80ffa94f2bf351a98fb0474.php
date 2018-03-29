<?php

/* CRCHelloBundle:Hello:hello.html.twig */
class __TwigTemplate_d9874a07fa69f405b0f07dabd0572bc380e38f81e390e6ea480fdd336042dcce extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CRCHelloBundle:Hello:hello.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["Hello"]) ? $context["Hello"] : $this->getContext($context, "Hello")), "html", null, true);
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["Hel"]) ? $context["Hel"] : $this->getContext($context, "Hel")), "html", null, true);
        echo "
";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["He"]) ? $context["He"] : $this->getContext($context, "He")), "html", null, true);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "CRCHelloBundle:Hello:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{{Hello}}
{{Hel}}
{{He}}

", "CRCHelloBundle:Hello:hello.html.twig", "C:\\wamp\\www\\symfony\\src\\CRC\\HelloBundle/Resources/views/Hello/hello.html.twig");
    }
}
