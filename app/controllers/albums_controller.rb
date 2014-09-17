class AlbumsController < ApplicationController

  def index
    # Get list of all albums

    # "Is not" is there because Ren put dummy albums to show release date for
    # their current page. Dumbbbb

    @albums = Album.where("title IS NOT '\u009D\u009D'").order("release_date DESC")

    # Get list of all personas

    # Sort all albums by persona, then add to an array where each different artist
    # appears only once

    # Define personas array
    @personas = Array.new
    # Define current and previous persona variables
    current_persona = nil
    prev_persona = nil

    albums_by_persona = Album.where("title IS NOT '\u009D\u009D'").order("artist")
    albums_by_persona.each do |album|

      # If the current and prev persona are the same, do nothing.
      # If this iteration has a new persona, add that new persona to the array.

      current_persona = album.artist

      if current_persona != prev_persona
        @personas << album.artist
        prev_persona = current_persona
      end

    end
  end

  def show
    @album = Album.find_by_id(params[:id])
  end

end
