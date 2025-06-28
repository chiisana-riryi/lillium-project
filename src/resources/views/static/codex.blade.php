@extends('templates.main')

@section('title')
    Lillium - Codex
@endsection

@section('content')
    <div class="container text-light">
        <div class="row">
            <div class="col">
                <h1>
                    Codex of Anomalies
                </h1>
            </div>
        </div>
        <hr class="border-light">

        <div class="row">
            <div class="col-8 col-xl-4">
                {{-- <div class="sticky-top"> --}}
                <h3 class="p-0"> Contents</h3>
                <div class="card back-card p-2">
                    <div class="border border-2 rounded-2 text-light">
                        {{-- <hr class="border-light opacity-75 m-0 mb-2"> --}}
                        <div class="row p-2 ">
                            <a class="fs-4 text-reset hover-underline" href="#artifact-properties">
                                Artifact Properties
                            </a>

                            <div class="col-8">
                                <hr class="opacity-100 my-1">
                            </div>

                            <a class="fs-5 text-reset hover-underline" href="#physical">
                                - Physical:
                            </a>

                            <div class="col-6">
                                <hr class="opacity-100 my-1">
                            </div>

                            <a class="fs-6 text-reset hover-underline" href="#chemical">
                                - - Chemical
                            </a>

                            <a class="fs-6 text-reset hover-underline" href="#thermal">
                                - - Thermal
                            </a>

                            <a class="fs-6 text-reset hover-underline" href="#electro">
                                - - Electro
                            </a>

                            <a class="fs-6 text-reset hover-underline" href="#nuclear">
                                - - Nuclear
                            </a>

                            <a class="fs-6 text-reset hover-underline" href="#somatic">
                                - - Somatic
                            </a>

                            <a class="fs-5 text-reset hover-underline" href="#memetic">
                                - Memetic:
                            </a>

                            <div class="col-6">
                                <hr class="opacity-100 my-1">
                            </div>

                            <a class="fs-6 text-reset hover-underline" href="#psychic">
                                - - Psychic
                            </a>

                            <a class="fs-6 text-reset hover-underline" href="#cognito">
                                - - Cognito
                            </a>

                            <a class="fs-5 text-reset hover-underline" href="#lumina">
                                - Lumina:
                            </a>

                            <div class="col-6">
                                <hr class="opacity-100 my-1">
                            </div>

                            <a class="fs-6 text-reset hover-underline" href="#spatial">
                                - - Spatial
                            </a>

                            <a class="fs-6 text-reset hover-underline" href="#temporal">
                                - - Temporal
                            </a>

                            <a class="fs-6 text-reset hover-underline" href="#quantum">
                                - - Quantum
                            </a>
                        </div>
                        {{-- <div class="row  p-2 ">

                                <a class="fs-4 text-reset hover-underline" href="#artifacts"> - Artifacts </a>
                            </div> --}}
                    </div>
                    {{-- </div> --}}
                </div>
            </div>

            <div class="col-12 col-xl-8">
                <div class="p-0 p-xl-2 mt-5 mt-xl-0">
                    <div class="border bourder-2 rounded-2 text-light">
                        <div class="row m-0 p-2">
                            <h2 class="m-0" id="artifact-properties">
                                Artifact Properties
                            </h2>
                        </div>
                        <hr class="border-light opacity-75 m-0 mb-2">



                        <div class="row m-0 p-2">
                            <div class="col-12">
                                <h3 class="text-center mt-4" id="physical"> Physical </h3>
                                <hr class="border-light opacity-75 m-0 mb-3">
                                <div class="row m-0 p-0">
                                    <div class="col-12 col-md-6 p-0">
                                        <h4 class="" id="chemical"> Chemical </h4>
                                        <hr class="border-light opacity-75 m-0 mb-2">

                                        <p>
                                            Chemical artifacts are anomalous in ways related to chemicals, such as the
                                            production of or interactions with certain chemicals. An example of such an
                                            artifact
                                            is the Empty, which was initially classed under <a href="#spatial"> Spatial
                                            </a>, as
                                            it is theorized to be a chemical fluid container, proven by the discovery of the
                                            Full Empty.
                                        </p>
                                    </div>

                                    <div class="col-12 col-md-6 d-flex justify-content-center mt-5">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid border border-2 rounded-4"
                                                src="/static/codex/FullEmpty2.png">
                                            <figcaption class="figure-caption text-light text-center">
                                                "Full Empty" artifact
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <div class="row m-0 p-0">
                                    <div class="col-12 col-md-6 p-0">
                                        <h4 class="" id="thermal"> Thermal </h4>
                                        <hr class="border-light opacity-75 m-0 mb-2">

                                        <p>
                                            Thermal artifacts produce anomalous phenomena regarding thermal radiation
                                            and heat.
                                            An notable example of an artifact with this property is the Sponge.
                                        </p>
                                    </div>

                                    <div class="col-12 col-md-6 d-flex justify-content-center mt-5">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid border border-2 rounded-4"
                                                src="/static/codex/sponge1.png">
                                            <figcaption class="figure-caption text-light text-center">
                                                "Sponge" artifact
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <div class="row m-0 p-0">
                                    <div class="col-12 col-md-6 p-0">
                                        <h4 class="" id="electro"> Electro </h4>
                                        <hr class="border-light opacity-75 m-0 mb-2">

                                        <p>
                                            Electro artifacts produce or interact with electricity. The Battery is a famous
                                            example, able to produce a seemingly endless amount of electricity when drawn.
                                        </p>
                                    </div>

                                    <div class="col-12 col-md-6 d-flex justify-content-center mt-5">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid border border-2 rounded-4"
                                                src="/static/codex/Battery2.png">
                                            <figcaption class="figure-caption text-light text-center">
                                                "Battery" artifact
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <div class="row m-0 p-0">
                                    <div class="col-12 col-md-6 p-0">
                                        <h4 class="" id="nuclear"> Nuclear </h4>
                                        <hr class="border-light opacity-75 m-0 mb-2">

                                        <p>
                                            Nuclear artifacts are anomalous in regards to their physical property, such as
                                            the
                                            transmuation or creation of matter. The Chameleon is a notable transmutator,
                                            able to
                                            to change its elemental structure without violating the law of conservation of
                                            matter and energy.
                                        </p>
                                    </div>

                                    <div class="col-12 col-md-6 d-flex justify-content-center mt-5">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid border border-2 rounded-4"
                                                src="/static/codex/Chameleon.png">
                                            <figcaption class="figure-caption text-light text-center">
                                                "Chameleon" artifact
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <div class="row m-0 p-0">
                                    <div class="col-12 col-md-6 p-0">
                                        <h4 class="" id="somatic"> Somatic </h4>
                                        <hr class="border-light opacity-75 m-0 mb-2">

                                        <p>
                                            Somatic artifacts are quite unique. These artifacts are able to anomalously
                                            interact
                                            with the bodies of living beings and creatures, either causing harm or benefit.
                                            An
                                            example is the Bracelet, which somehow makes the wearer healthier over time.
                                        </p>
                                    </div>

                                    <div class="col-12 col-md-6 d-flex justify-content-center mt-5">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid border border-2 rounded-4"
                                                src="/static/codex/Bracelet.png">
                                            <figcaption class="figure-caption text-light text-center">
                                                "Bracelet" artifact
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <h3 class="text-center mt-4" id="memetic"> Memetic </h3>
                                <hr class="border-light opacity-75 m-0 mb-3">

                                <div class="row m-0 p-0">
                                    <div class="col-12 col-md-6 p-0">
                                        <h4 class="" id="psychic"> Psychic </h4>
                                        <hr class="border-light opacity-75 m-0 mb-2">

                                        <p>
                                            Psychic artifacts have the ability to impact the mind of sentient beings and
                                            creatures, even without their knowledge or consent. The Black Spray, which is
                                            able
                                            to affect the minds of surrounding humans and animals, is one example.
                                        </p>
                                    </div>

                                    <div class="col-12 col-md-6 d-flex justify-content-center mt-5">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid border border-2 rounded-4"
                                                src="/static/codex/Itcher2.png">
                                            <figcaption class="figure-caption text-light text-center">
                                                "Itcher" artifact
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <div class="row m-0 p-0">
                                    <div class="col-12 col-md-6 p-0">
                                        <h4 class="" id="cognito"> Cognito </h4>
                                        <hr class="border-light opacity-75 m-0 mb-2">

                                        <p>
                                            Memetic artifacts, unlike Psychic, affect individuals through the vector of
                                            information. One example is the Shard, which gives anyone reading its engravings
                                            lucid dreams for as long as they can remember the writings.
                                        </p>
                                    </div>

                                    <div class="col-12 col-md-6 d-flex justify-content-center mt-5">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid border border-2 rounded-4"
                                                src="/static/codex/shard2.png">
                                            <figcaption class="figure-caption text-light text-center">
                                                "Shard" artifact
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>


                                <h3 class="text-center mt-4" id="lumina"> Lumina </h3>
                                <hr class="border-light opacity-75 m-0 mb-3">

                                <div class="row m-0 p-0">
                                    <div class="col-12 col-md-6 p-0">
                                        <h4 class="" id="spatial"> Spatial </h4>
                                        <hr class="border-light opacity-75 m-0 mb-2">

                                        <p>
                                            Spatial artifacts have primarily spatial anomalies. Most of such artifacts do
                                            not
                                            interact with matter directly, and rather relies on bending the space
                                            surrounding
                                            them. A famous, albeit minor, example is the Black Spray, which are marbles that
                                            seem to hold vast pocket dimensions within them.
                                        </p>
                                    </div>

                                    <div class="col-12 col-md-6 d-flex justify-content-center mt-5">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid border border-2 rounded-4"
                                                src="/static/codex/bs2.png">
                                            <figcaption class="figure-caption text-light text-center">
                                                "Black Spray" artifact
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <div class="row m-0 p-0">
                                    <div class="col-12 col-md-6 p-0">
                                        <h4 class="" id="temporal"> Temporal </h4>
                                        <hr class="border-light opacity-75 m-0 mb-2">

                                        <p>
                                            Temporal artifacts hold anomalies regarding time, such as altering the flow of
                                            time
                                            or time travelling. The Oscillator is categorized as such, since it is
                                            theorized,
                                            with strong evidence, that it is a high-energy time crystal.
                                        </p>
                                    </div>

                                    <div class="col-12 col-md-6 d-flex justify-content-center mt-5">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid border border-2 rounded-4"
                                                src="/static/codex/Oscilaltor2.png">
                                            <figcaption class="figure-caption text-light text-center">
                                                "Oscillator" artifact
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>

                                <div class="row m-0 p-0">
                                    <div class="col-12 col-md-6 p-0">
                                        <h4 class="" id="quantum"> Quantum </h4>
                                        <hr class="border-light opacity-75 m-0 mb-2">

                                        <p>
                                            Quantum artifacts have anomalous properties regarding superpositions. An example
                                            of
                                            such an artifact would be one that holds many states at once. The Twins artifact
                                            is
                                            another example, with the ability to transfer physical states and properties
                                            across
                                            one another over vast distances.
                                        </p>
                                    </div>

                                    <div class="col-12 col-md-6 d-flex justify-content-center mt-5">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid border border-2 rounded-4"
                                                src="/static/codex/Twins.png">
                                            <figcaption class="figure-caption text-light text-center">
                                                "Twins" artifact
                                            </figcaption>
                                        </figure>
                                    </div>


                                </div>
                            </div>
                        </div>



                        {{-- <div class="row m-0 p-2">
                            <h2 class="m-0" id="artifacts"> Artifacts </h2>
                        </div>
                        <hr class="border-light opacity-75 m-0 mb-2"> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
