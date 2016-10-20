<?php

/* MyAppCarnetBundle:Contact:ListContact.html.twig */
class __TwigTemplate_7b20009fdd319e584994554af01922d6b3a21e42ebdc897490e79373bdf8efcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyAppCarnetBundle:Contact:ListContact.html.twig", 1);
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
        echo "Liste des contacts";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
  
        <div class=\"w3-container\">
            <center> <h2>Liste des contacts</h2></center>
<i class=\"fa fa-plus\" aria-hidden=\"true\"></i><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_ajouter_contact");
        echo "\" role=\"button\">Ajouter un contact</a>
      
  <ul class=\"w3-ul w3-card-4\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Contact"]) ? $context["Contact"] : $this->getContext($context, "Contact")));
        foreach ($context['_seq'] as $context["_key"] => $context["C"]) {
            // line 14
            echo "    <li class=\"w3-padding-16\">
      <span onclick=\"this.parentElement.style.display='none'\"
      class=\"w3-closebtn w3-padding w3-margin-right w3-medium\"><i class=\"fa fa-minus-square\" aria-hidden=\"true\"></i>
          <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_supprimer_contact", array("id" => $this->getAttribute($context["C"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">Supprimer</a></span>
      
       <span onclick=\"this.parentElement.style.display='none'\"
      class=\"w3-closebtn w3-padding w3-margin-right w3-medium\"><i class=\"fa fa-check-square\" aria-hidden=\"true\"></i>   <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_modifer_contact", array("id" => $this->getAttribute($context["C"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">Modifier</a></span>
 
     
      <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("./img/person.png"), "html", null, true);
            echo "\" class=\"w3-left w3-circle w3-margin-right\" style=\"width:60px\">
     <span class=\"w3-xlarge\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["C"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["C"], "prenom", array()), "html", null, true);
            echo "</span><br>
       <i class=\"fa fa-building\" aria-hidden=\"true\"></i> <span>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["C"], "adresse", array()), "html", null, true);
            echo "</span>
    <i class=\"fa fa-volume-control-phone\" aria-hidden=\"true\"></i><span>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["C"], "telephone", array()), "html", null, true);
            echo "</span> 
     <span class=\"glyphicon glyphicon-envelope\"/><span>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["C"], "email", array()), "html", null, true);
            echo "</span>
     <i class=\"fa fa-globe\" aria-hidden=\"true\"></i><span >";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["C"], "siteweb", array()), "html", null, true);
            echo "</span>
    </li>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['C'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "   
  </ul>
</div>


    ";
    }

    public function getTemplateName()
    {
        return "MyAppCarnetBundle:Contact:ListContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  75 => 24,  71 => 23,  65 => 20,  59 => 17,  54 => 14,  50 => 13,  44 => 10,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %}Liste des contacts{% endblock %}

{% block body %}

  
        <div class=\"w3-container\">
            <center> <h2>Liste des contacts</h2></center>
<i class=\"fa fa-plus\" aria-hidden=\"true\"></i><a href=\"{{path(\"_ajouter_contact\")}}\" role=\"button\">Ajouter un contact</a>
      
  <ul class=\"w3-ul w3-card-4\">
        {% for C in Contact %}
    <li class=\"w3-padding-16\">
      <span onclick=\"this.parentElement.style.display='none'\"
      class=\"w3-closebtn w3-padding w3-margin-right w3-medium\"><i class=\"fa fa-minus-square\" aria-hidden=\"true\"></i>
          <a href=\"{{path(\"_supprimer_contact\",{'id':C.id})}}\" role=\"button\">Supprimer</a></span>
      
       <span onclick=\"this.parentElement.style.display='none'\"
      class=\"w3-closebtn w3-padding w3-margin-right w3-medium\"><i class=\"fa fa-check-square\" aria-hidden=\"true\"></i>   <a href=\"{{path(\"_modifer_contact\",{'id':C.id})}}\" role=\"button\">Modifier</a></span>
 
     
      <img src=\"{{asset('./img/person.png')}}\" class=\"w3-left w3-circle w3-margin-right\" style=\"width:60px\">
     <span class=\"w3-xlarge\">{{C.nom}} {{C.prenom}}</span><br>
       <i class=\"fa fa-building\" aria-hidden=\"true\"></i> <span>{{C.adresse}}</span>
    <i class=\"fa fa-volume-control-phone\" aria-hidden=\"true\"></i><span>{{C.telephone}}</span> 
     <span class=\"glyphicon glyphicon-envelope\"/><span>{{C.email}}</span>
     <i class=\"fa fa-globe\" aria-hidden=\"true\"></i><span >{{C.siteweb}}</span>
    </li>
   {% endfor %}
   
  </ul>
</div>


    {% endblock %}

";
    }
}
