var App = Ember.Application.create();

//Router
App.Router.map(function() {
  this.resource('index');
  this.resource('community');
  this.resource('news');
  this.resource('donate');
  this.resource('contact');
  this.resource('store');
  
  this.resource('newsletters');
  
  //this.route("newsletters", { path: "/newsletters" });
});

App.NewslettersRoute = Ember.Route.extend({
  model: function() {
    return App.Newsletter.find();
  }
});

//Controller
App.NewslettersController = Ember.ArrayController.extend();

//Models
App.Store = DS.Store.extend({
  revision: 11,
  adapter: 'DS.FixtureAdapter'
});

App.Newsletter = DS.Model.extend();

App.Newsletter.FIXTURES = [
{id: 1, name: "bill" },
{id: 2, name: "joe"},
{id: 3, name: "sue"},
{id: 4, name: "rick" },
{id: 5, name: "lana" }
]
  