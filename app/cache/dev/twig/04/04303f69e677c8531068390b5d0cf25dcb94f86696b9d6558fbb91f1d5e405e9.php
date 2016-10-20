<?php

/* MyAppCarnetBundle:Contact:ModiferContact.html.twig */
class __TwigTemplate_7e1c396d737822bebcdc1e6419d61472fab0a763ccc136bbc79b236b94b4da9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyAppCarnetBundle:Contact:ModiferContact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Modifier Contact";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <ul class=\"w3-navbar w3-green\">
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_list_contact");
        echo "\" role=\"button\">Liste des contact</a></li>
   
  </ul>
    <center><h1>Modifier Contact</h1></center>
    <div class=\"well\">
        ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'errors');
        echo "
        <div class=\"form-group\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Prenom"));
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nom", array()), 'errors');
        echo "
            <div class=\"col-sm-4\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom"));
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prenom", array()), 'errors');
        echo "
            <div class=\"col-sm-4\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "email"));
        echo "
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "email", array()), 'errors');
        echo "
            <div class=\"col-sm-4\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "adresse", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Telephone"));
        echo "
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "adresse", array()), 'errors');
        echo "
            <div class=\"col-sm-4\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
   <div class=\"form-group\">
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "telephone", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Telephone"));
        echo "
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "telephone", array()), 'errors');
        echo "
            <div class=\"col-sm-4\">
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
               <div class=\"form-group\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "siteweb", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Telephone"));
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "siteweb", array()), 'errors');
        echo "
            <div class=\"col-sm-4\">
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "siteweb", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-3\">
            </div>
            <div class=\"col-sm-4\">
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary form-control")));
        echo "
            </div>
        </div>
        ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "MyAppCarnetBundle:Contact:ModiferContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 63,  157 => 60,  147 => 53,  142 => 51,  138 => 50,  131 => 46,  126 => 44,  122 => 43,  115 => 39,  110 => 37,  106 => 36,  99 => 32,  94 => 30,  90 => 29,  83 => 25,  78 => 23,  74 => 22,  67 => 18,  62 => 16,  58 => 15,  53 => 13,  49 => 12,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %}Modifier Contact{% endblock %}

{% block body %}
    <ul class=\"w3-navbar w3-green\">
    <li><a href=\"{{path(\"_list_contact\")}}\" role=\"button\">Liste des contact</a></li>
   
  </ul>
    <center><h1>Modifier Contact</h1></center>
    <div class=\"well\">
        {{ form_start(Form, {'attr': {'class': 'form-horizontal'}}) }}
        {{ form_errors(Form) }}
        <div class=\"form-group\">
            {{ form_label(Form.nom, \"Prenom\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            {{ form_errors(Form.nom) }}
            <div class=\"col-sm-4\">
                {{ form_widget(Form.nom, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(Form.prenom, \"Nom\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            {{ form_errors(Form.prenom) }}
            <div class=\"col-sm-4\">
                {{ form_widget(Form.prenom, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(Form.email, \"email\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            {{ form_errors(Form.email) }}
            <div class=\"col-sm-4\">
                {{ form_widget(Form.email, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(Form.adresse, \"Telephone\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            {{ form_errors(Form.adresse) }}
            <div class=\"col-sm-4\">
                {{ form_widget(Form.adresse, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
   <div class=\"form-group\">
            {{ form_label(Form.telephone, \"Telephone\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            {{ form_errors(Form.telephone) }}
            <div class=\"col-sm-4\">
                {{ form_widget(Form.telephone, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
               <div class=\"form-group\">
            {{ form_label(Form.siteweb, \"Telephone\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
            {{ form_errors(Form.siteweb) }}
            <div class=\"col-sm-4\">
                {{ form_widget(Form.siteweb, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-3\">
            </div>
            <div class=\"col-sm-4\">
                {{ form_widget(Form.save, {'attr': {'class': 'btn btn-primary form-control'}}) }}
            </div>
        </div>
        {{ form_end(Form) }}
    </div>
{% endblock %}
";
    }
}
