import FooterNav from './widgets/FooterNav'
import HeaderNav from './widgets/HeaderNav'
import PageHeaderWidget from './widgets/page-header/PageHeaderWidget'
import HomepageSliderWidget from './widgets/homepage-slider/HomepageSliderWidget'
import OurStoryWidget from './widgets/our-story/OurStoryWidget'
import WhatIsFaWidget from './widgets/what-is-fa/WhatIsFaWidget'
import DiagnosedSliderWidget from './widgets/diagnosed-slider/DiagnosedSliderWidget'
import TreatmentsWidget from './widgets/treatments/TreatmentsWidget'
import GetInvolvedWidget from './widgets/get-involved/GetInvolvedWidget'
import SubscribesWidget from './widgets/subscribes/SubscribesWidget'
import SimpleTextWidget from './widgets/simple-text/SimpleTextWidget'
import TeamMembersWidget from './widgets/team-members/TeamMembersWidget'
import PartnersWidget from './widgets/partners/PartnersWidget'
import SummaryBlockWidget from './widgets/summary-block/SummaryBlockWidget'
import EventsListWidget from './widgets/events-list/EventsListWidget'
import Slider from './widgets/slider/SliderWidget'
import FeaturesWidget from './widgets/features/FeaturesWidget'
import ButtonsWidget from './widgets/buttons/ButtonsWidget'
import MapWidget from './widgets/map/MapWidget'
import SubMenuWidget from './widgets/sub-menu/SubMenuWidget'
import SimpleTextGrayWidget from './widgets/simple-text-gray/SimpleTextGrayWidget'
import StudieSliderWidget from './widgets/studie-slider/StudieSliderWidget'

class ThemeLoader {
  bootTheme (app) {
    let components = [
      HeaderNav,
      FooterNav,
      PageHeaderWidget,
      HomepageSliderWidget,
      OurStoryWidget,
      WhatIsFaWidget,
      DiagnosedSliderWidget,
      StudieSliderWidget,
      TreatmentsWidget,
      GetInvolvedWidget,
      SubscribesWidget,
      SimpleTextWidget,
      TeamMembersWidget,
      PartnersWidget,
      SummaryBlockWidget,
      EventsListWidget,
      Slider,
      FeaturesWidget,
      ButtonsWidget,
      MapWidget,
      SubMenuWidget,
      SimpleTextGrayWidget
    ]

    components.map(component => {
      app.component('Fala' + component.name, component)
    })
  }
}

export default new ThemeLoader()
